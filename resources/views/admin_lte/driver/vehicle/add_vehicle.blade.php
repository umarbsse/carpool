@extends(get_private_template_name().'.layouts.dashboard.app')

@section('main_content')
    <!-- Main content -->
    <div class="row">
          <!-- left column -->
          <div class="col-md-10">
            <!-- Input addon -->
            <form method="POST" action="{{ route('save_new_vehicle') }}">
              @csrf
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Basic Info</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Car Name</label>                                    
                                <select name="vehicle_id" required id="vehicle_id" class="form-control select2" style="width: 100%;">
                                    <option value="">--Select--</option>
                                    @foreach ($vehicles_list as $list)
                                        <option value="{{$list['id']}}">{{ "{$list['name']}" }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Manufacturer Year</label>
                                <input type="text" name="manufactor_year" class="form-control @error('manufactor_year') is-invalid @enderror" value="" placeholder="For e.g 2018">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-header">
                  <h3 class="card-title">Registration Details</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Registration Number</label>
                                <input type="text" name="reg_number" class="form-control @error('reg_number') is-invalid @enderror" value="" placeholder="For e.g 2018">
                            </div>
                            <div class="form-group">
                                <label>Registration Year</label>
                                <input type="text" name="reg_year" class="form-control @error('reg_year') is-invalid @enderror" value="" placeholder="For e.g 2018">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Registration Province</label>                                    
                                <select name="reg_province" id="reg_province" class="form-control select2" style="width: 100%;">
                                    <option value="">--Select--</option>
                                    @foreach ($vehicles_reg_geo_locations as $list)
                                        <option value="{{$list['id']}}">{{ "{$list['name']}" }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Create new ride</button>
                  </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </form>
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
    <!-- /.content -->
@endsection