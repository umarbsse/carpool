@extends(get_private_template_name().'.layouts.dashboard.app')

@section('main_content')
    <!-- Main content -->
    <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- Input addon -->
            <form method="POST" action="{{ route('update_setting') }}">
              @csrf
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Change your account setting</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>From</label>                                    
                                <select name="location_start" class="form-control select2" style="width: 100%;">
                                    <option value="">--Select--</option>
                                    @foreach ($district_list as $area)
                                        <option value="{{$area['id']}}">{{ "{$area['district_name']}" }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInput">Maximum Seat</label>
                                <input type="text" name="max_seats" class="form-control @error('max_seats') is-invalid @enderror" value="" placeholder="For e.g 4">
                            </div>
                            <div class="form-group">
                                <label>Driver</label>                                    
                                <select name="location_start" class="form-control select2" style="width: 100%;">
                                    <option value="">--Select--</option>
                                    @foreach ($district_list as $area)
                                        <option value="{{$area['id']}}">{{ "{$area['district_name']}" }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInput">Departure Time</label>
                                <input type="datetime-local" name="start_time" class="form-control @error('start_time') is-invalid @enderror" value="" placeholder="For e.g 4">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>To</label>                                    
                                <select name="location_end" class="form-control select2" style="width: 100%;">
                                    <option value="">--Select--</option>
                                    @foreach ($district_list as $area)
                                        <option value="{{$area['id']}}">{{ "{$area['district_name']}" }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInput">Maximum Seat</label>
                                <input type="text" name="availble_seats" class="form-control @error('availble_seats') is-invalid @enderror" value="" placeholder="For e.g 3 seats">
                            </div>
                            <div class="form-group">
                                <label>Vehicle</label>                                    
                                <select name="location_start" class="form-control select2" style="width: 100%;">
                                    <option value="">--Select--</option>
                                    @foreach ($district_list as $area)
                                        <option value="{{$area['id']}}">{{ "{$area['district_name']}" }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInput">Arrival Time</label>
                                <input type="datetime-local" name="end_time" class="form-control @error('end_time') is-invalid @enderror" value="" placeholder="For e.g 4">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update Setting</button>
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