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
                                    <label>First Name</label>
                                    <input type="text" name="first_name" class="form-control  @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" placeholder="Enter First name">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" class="form-control  @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" placeholder="Enter Last name">
                                </div>
                                <div class="form-group">
                                    <label>CNIC</label>
                                    <input type="text" name="cnic" class="form-control  @error('cnic') is-invalid @enderror" value="{{ old('cnic') }}" placeholder="Enter CNIC">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input type="text" name="mobile" class="form-control  @error('mobile') is-invalid @enderror" value="{{ old('mobile') }}" placeholder="Enter Mobile Number">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Enter email">
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