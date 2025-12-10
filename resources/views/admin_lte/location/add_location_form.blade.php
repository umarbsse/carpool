<form id="add_general_modal_form" method="POST" action="{{$form_action_url}}" >
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title" style="color: black;">{{$title}}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body" style="color: black;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Enter location name">
                                </div>
                                <div class="form-group">
                                    <label>Lat</label>
                                    <input type="text" name="lat" class="form-control"  placeholder="Enter latitude">
                                </div>
                                <div class="form-group">
                                    <label>Is Enable</label>                       
                                    <select class="form-control select2" name="is_enable" style="width: 100%;">
                                        <option value="">--Select--</option>
                                        <option value="2" selected="selected">Yes</option>
                                        <option value="1">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>District, Province</label>                                    
                                    <select name="parent_loc" class="form-control select2" style="width: 100%;">
                                        <option value="">--Select--</option>
                                        @foreach ($district_list as $area)
                                            <option value="{{$area['id']}}">{{ "{$area['district_name']}, {$area['province_name']}" }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Lang</label>
                                    <input type="text" name="lng" class="form-control" placeholder="Enter Lang">
                                </div>
                                <div class="form-group">
                                    <label>Disable Reason</label>
                                    <input type="text" class="form-control" name="disable_reason" placeholder="Enter Disable Reason">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Location</button>
                    </div>
                </form>