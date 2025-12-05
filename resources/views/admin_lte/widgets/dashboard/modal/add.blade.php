@isset($add_modal)
    <button type="button" data-form_route="{!! $add_modal['button_form_route']!!}" class="{!! $add_modal['button_class']!!}" id="add_general_modal" data-toggle="modal" data-target="#modal-add" style="float: right;">
        {!! $add_modal['button_icon']!!}&nbsp;{{$add_modal['button_title']}}
    </button>
    

    <div class="modal fade" id="modal-add">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
            <!-- /.modal-content -->
        </div>
            <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endisset