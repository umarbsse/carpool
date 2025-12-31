@extends(get_private_template_name().'.layouts.dashboard.app')

@section('main_content')
    <!-- Main content -->
    <div class="row">
          <!-- left column -->
          <div class="col-md-10">
            <!-- Input addon -->
            <form method="POST" action="{{ route('save_new_ride') }}">
              @csrf
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Create a new ride</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>From</label>                                    
                                <select name="location_start" required id="location_start" class="form-control select2" style="width: 100%;">
                                    <option value="">--Select--</option>
                                    @foreach ($district_list as $area)
                                        <option value="{{$area['id']}}">{{ "{$area['district_name']}" }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInput">Total Seat</label>                                    
                                <select name="max_seats" class="form-control select2" style="width: 100%;">
                                    <option value="">--Select--</option>
                                    @for ($i = 1; $i <= get_maximum_seats(); $i++)
                                        <option value="{{$i}}">{{ "{$i}" }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Driver</label>                                    
                                <select name="driver_id" id="driver_id" class="form-control select2" style="width: 100%;">
                                    <option value="">--Select--</option>
                                    @foreach ($driver_list as $dr)
                                        <option value="{{$dr['id']}}">{{ "{$dr['first_name']} {$dr['last_name']}" }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInput">Departure Time</label>
                                <input type="text" name="start_time" data-minimum-date="{{ get_currentTime('Y-m-d') }}" class="datetime_picker form-control @error('start_time') is-invalid @enderror" value="" placeholder="For e.g 4">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>To</label>                                    
                                <select name="location_end" id="location_end" class="form-control select2" style="width: 100%;">
                                    <option value="">--Select--</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInput">Availble Seat</label>
                                <select name="availble_seats" class="form-control select2" style="width: 100%;">
                                    <option value="">--Select--</option>
                                    @for ($i = 1; $i <= get_maximum_seats(); $i++)
                                        <option value="{{$i}}">{{ "{$i}" }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Vehicle</label>                                    
                                <select name="vehicle_id" id="vehicle_id" class="form-control select2" required style="width: 100%;">
                                    <option value="">--Select--</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInput">Arrival Time</label>
                                <input type="text" name="end_time" data-minimum-date="{{ get_currentTime('Y-m-d h:i A') }}" class="datetime_picker form-control @error('end_time') is-invalid @enderror" value="" placeholder="For e.g 4">
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