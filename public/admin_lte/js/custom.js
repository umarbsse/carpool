$('#add_general_modal').on('click', function () {
    // Load modal form data
    //alert("here");
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