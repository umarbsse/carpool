<!-- ADD MODAL -->

@if (is_route("location_list") || is_route("user_list") )
    @include(get_private_template_name().'.widgets.dashboard.modal.add')
@endif
<!-- UPDATE MODAL -->
@if (is_route("location_list") || is_route("user_list") )
    @include(get_private_template_name().'.widgets.dashboard.modal.update')
@endif