@extends(get_private_template_name().'.layouts.dashboard.app')

@section('main_content')
    <!-- Main content -->
    <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Input addon -->
            <form method="POST" action="{{ route('save_booking') }}">
              @csrf
              <input type="hidden" name="ride_token" value="{{$rides['id']}}" />
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Basic Info</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped data_table">
                            <tbody>
                                <tr>
                                    <th>From</th>
                                    <td>{{$rides['location_start']}}</td>
                                    <th>To</th>
                                    <td>{{$rides['location_end']}}</td>
                                </tr>
                                <tr>
                                    <th>Total Seats</th>
                                    <td>{{$rides['max_seats']}}</td>
                                    <th>Availble Seats</th>
                                    <td>{{$rides['availble_seats']}}</td>
                                </tr>
                                <tr>
                                    <th>Departure</th>
                                    <td>{!! mysql_time_to_humen_time($rides['start_time']) !!}</td>
                                    <th>Arrival</th>
                                    <td>{!! mysql_time_to_humen_time($rides['end_time']) !!}</td>
                                </tr>
                                <tr>
                                    <th>Vehicle Name</th>
                                    <td>{{$rides['vehicle_name']}}</td>
                                    <th>Vehicle Reg #</th>
                                    <td>{{$rides['reg_number']}}</td>
                                </tr>
                                <tr>
                                    <th>Driver Name</th>
                                    <td>{{$rides['driver_name']}}</td>
                                    <th>Status</th>
                                    <td>{{ucfirst($rides['status'])}}</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-header">
                  <h3 class="card-title">Seat Selection</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div id="seat_container"></div> <!-- Hidden inputs will go here -->
                            <div class="car-seat-wrapper">
                                <!-- Front Seats -->
                                <div class="seat-row seat-front seat-front-right">
                                    <div class="seat seat-{{ check_if_seat_is_booked($selected_seats, 1) ? 'booked' : 'available' }}" onclick="selectSeat(this, 1)">
                                        Seat 1
                                    </div>
                                    <div class="seat seat-driver">
                                        🚗 Driver
                                    </div>
                                </div>

                                <!-- Back Seats -->
                                <div class="seat-row seat-back">
                                    <div class="seat seat-{{ check_if_seat_is_booked($selected_seats, 2) ? 'booked' : 'available' }}" onclick="selectSeat(this, 2)">
                                        Seat 2
                                    </div>
                                    <div class="seat seat-{{ check_if_seat_is_booked($selected_seats, 3) ? 'booked' : 'available' }}" onclick="selectSeat(this, 3)">
                                        Seat 3
                                    </div>
                                    <div class="seat seat-{{ check_if_seat_is_booked($selected_seats, 4) ? 'booked' : 'available' }}" onclick="selectSeat(this, 4)">
                                        Seat 4
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-header">
                  <h3 class="card-title">Booking Details</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInput">Booking Status</label>                                    
                                <select name="booking_status" required class="form-control select2" style="width: 100%;">
                                    <option value="">--Select--</option>
                                    @foreach ($booking_status as $list)
                                        <option value="{{$list['id']}}">{{ $list['name'].' ('.$list['description'].')' }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInput">Payment Status</label>                                    
                                <select name="payment_status" required class="form-control select2" style="width: 100%;">
                                    <option value="">--Select--</option>
                                    @foreach ($payment_status as $list)
                                        <option value="{{$list['id']}}">{{ $list['name'].' ('.$list['description'].')' }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="submit" value="submit" class="btn btn-success">Book Ride</button>
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