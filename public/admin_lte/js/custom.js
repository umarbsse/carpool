
$(document).ready(function () {
    $('#add_general_modal').on('click', function () {
    let actionUrl = $(this).attr('data-form_route');
    $.ajax({
        url: actionUrl,      // Laravel route
        type: 'GET',
        success: function (response) {
            $("#modal-add .modal-content").html(response);
            $('.select2').select2();
        },
        error: function (xhr) {
            alert("Error loading data");
        }
    });
    });
    $('.modal-update_btn').on('click', function () {
        $('#modal-update').modal('show');
    });
    $('#driver_id').on('change', function () {
        let driver_id = $(this).val();
        if (!driver_id) return;
        $.ajax({
            url: window.routes.get_driver_vehicles,
            type: 'GET',
            data: { driver_id: driver_id },
            success: function (response) {
                //console.log(response);

                let options = '<option value="">Select Vehicle</option>';
                if (response.data && response.data.length > 0) {
                    $.each(response.data, function (index, item) {
                        options += `<option value="${item.id}">${item.name}</option>`;
                    });
                }

                $('#vehicle_id').html(options);
            },
            error: function (xhr) {
                console.error(xhr.responseText);
            }
        });
    });
    $('#location_start').on('change', function () {
        let get_to_location = $(this).val();
        if (!get_to_location) return;
        $.ajax({
            url: window.routes.get_to_location,
            type: 'GET',
            data: { location_id: get_to_location },
            success: function (response) {

                let options = '<option value="">Select To Location</option>';
                if (response.data && response.data.length > 0) {
                    $.each(response.data, function (index, item) {
                        options += `<option value="${item.id}">${item.district_name}</option>`;
                    });
                }

                $('#location_end').html(options);
            },
            error: function (xhr) {
                console.error(xhr.responseText);
            }
        });
    });
    var customMin = $('.datetime_picker').data('minimum-date'); // 12-hour format
    console.log(customMin);

    $('.datetime_picker').datetimepicker({
        format: 'YYYY-MM-DD hh:mm A',
        minDate: moment(customMin, 'YYYY-MM-DD'),
        allowInputToggle: true, // click input to open
        focusOnShow: true,
        showClose: true,   // 👈 display close button
        sideBySide: true,
        icons: {
            time: 'fas fa-clock',
            date: 'fas fa-calendar-alt',
            up: 'fas fa-chevron-up',
            down: 'fas fa-chevron-down',
            previous: 'fas fa-chevron-left',
            next: 'fas fa-chevron-right',
            today: 'fas fa-calendar-check',
            clear: 'fas fa-trash',
            close: 'fas fa-times'
        },
    });

    // Open picker when input is clicked or focused
    $('.datetime_picker').on('focus click', function () {
        $(this).datetimepicker('show');
    });
});
// Close picker when clicking outside
$(document).on('mousedown', function (e) {
    /*var widget = $('.datetime_picker').data('datetimepicker').widget; // widget DOM element
    if (!$(e.target).closest(widget).length && !$(e.target).is($('.datetime_picker'))) {
        $('.datetime_picker').datetimepicker('hide');
    }*/
});
let selectedSeats = [];
//const maxSeats = 2; // Maximum seats allowed

function selectSeat(el, seatNo) {

    // Prevent selecting booked seats (red color)
    if (el.style.backgroundColor === 'rgb(211, 47, 47)') { // booked
        return;
    }

    const index = selectedSeats.indexOf(seatNo);

    if (index !== -1) {
        // Unselect seat
        selectedSeats.splice(index, 1);
        el.style.backgroundColor = '#e0e0e0';
        el.style.color = '#000';

        // Remove corresponding hidden input
        const hiddenInput = document.querySelector(`#seat_container input[value="${seatNo}"]`);
        if (hiddenInput) hiddenInput.remove();

    } else {
        // Max seat limit check
        /*if (selectedSeats.length >= maxSeats) {
            alert('Maximum ' + maxSeats + ' seats allowed');
            return;
        }*/

        // Select seat
        selectedSeats.push(seatNo);
        el.style.backgroundColor = '#4CAF50';
        el.style.color = '#fff';

        // Create hidden input for this seat
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'selected_seats[]';
        input.value = seatNo;
        document.getElementById('seat_container').appendChild(input);
    }

    console.log('Selected Seats:', selectedSeats);
}
