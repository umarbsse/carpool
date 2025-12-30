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