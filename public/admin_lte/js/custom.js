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
$('#asdasdasdasadd_general_modal').on('click', function () {
    e.preventDefault();
    var url = 'abc.com';
    let actionUrl = $(this).attr('action');
    $.ajax({
        url: actionUrl,      // Laravel route
        type: 'POST',           // or POST
        data: {
            id: 1              // optional data
        },
        success: function (response) {
            $('#result').html(response);
        },
        error: function (xhr) {
            alert("Error loading data");
        }
    });
});