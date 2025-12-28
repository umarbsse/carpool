@isset($add_modal)
    <button type="button" data-form_route="{!! $add_modal['button_form_route']!!}" class="{!! $add_modal['button_class']!!}" id="add_general_modal" data-toggle="modal" data-target="#modal-add" style="float: right;">
        {!! $add_modal['button_icon']!!}&nbsp;{{$add_modal['button_title']}}
    </button>
@endisset
@isset($btn_link)
    <a href="{!! $btn_link['button_form_route']!!}" class="{!! $btn_link['button_class']!!}" style="float: right;">
        {!! $btn_link['button_icon']!!}&nbsp;{{$btn_link['button_title']}}
    </a>
@endisset
