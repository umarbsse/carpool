@extends(get_private_template_name().'.layouts.dashboard.app')

@section('main_content')
    <!-- Main content -->
    <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Input addon -->
            <form method="POST" action="{{ route('save_booking') }}">
              @csrf
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
                  <h3 class="card-title">Passenger Details</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" name="seats[]" id="selected_seats" value="">

<div style="width:260px;margin:30px auto;padding:15px;border:1px solid #ccc;border-radius:8px;font-family:Arial;background:#fff">

    <!-- Front Seats -->
    <div style="display:flex;justify-content:space-between;margin-bottom:20px">

        <div style="background:#555;color:#fff;padding:14px 18px;border-radius:6px;text-align:center">
            🚗 Driver
        </div>

        <div onclick="selectSeat(this, 1)"
             style="background:#e0e0e0;padding:14px 18px;border-radius:6px;cursor:pointer;text-align:center">
            Seat 1
        </div>

    </div>

    <!-- Back Seats -->
    <div style="display:flex;justify-content:space-between">

        <div onclick="selectSeat(this, 2)"
             style="background:#e0e0e0;padding:14px 18px;border-radius:6px;cursor:pointer;text-align:center">
            Seat 2
        </div>

        <div style="background:#d32f2f;color:#fff;padding:14px 18px;border-radius:6px;text-align:center">
            Seat 3
        </div>

        <div onclick="selectSeat(this, 4)"
             style="background:#e0e0e0;padding:14px 18px;border-radius:6px;cursor:pointer;text-align:center">
            Seat 4
        </div>

    </div>
</div>

<script>
let selectedSeats = [];

function selectSeat(el, seatNo) {

    // Prevent selecting booked seats
    if (el.style.backgroundColor === 'rgb(211, 47, 47)') {
        return;
    }

    const index = selectedSeats.indexOf(seatNo);

    if (index !== -1) {
        // Unselect seat
        selectedSeats.splice(index, 1);
        el.style.backgroundColor = '#e0e0e0';
        el.style.color = '#000';
    } else {
        // Select seat
        selectedSeats.push(seatNo);
        el.style.backgroundColor = '#4CAF50';
        el.style.color = '#fff';
    }

    // Update hidden input
    document.getElementById('selected_seats').value = selectedSeats.join(',');
}
</script>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInput">Book Seats</label>
                                <input type="hidden" name="ride_token" value="{{$rides['id']}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInput">Booking Status</label>                                    
                                <select name="status" required class="form-control select2" style="width: 100%;">
                                    <option value="">--Select--</option>
                                    @foreach ($booking_status as $list)
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