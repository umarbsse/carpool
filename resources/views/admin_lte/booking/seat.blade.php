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
                        
                        <div class="col-md-12">
                            
                            <ul class="timeline" >
                                <li >
                                    <span >10<sup>th</sup> Jan 2026 5:15 PM</span>
                                    <div >
                                        <strong>Booking Created</strong>
                                        <p>User booked a seat successfully.</p>
                                    </div>
                                    <span style="position: absolute; left: -10px; top: 5px; width: 16px; height: 16px; background-color: #0d6efd; border-radius: 50%; border: 2px solid #fff;"></span>
                                </li>

                                <li >
                                    <span >10<sup>th</sup> Jan 2026 5:15 PM</span>
                                    <div >
                                        <strong>Booking Created</strong>
                                        <p>User booked a seat successfully.</p>
                                    </div>
                                    <span style="position: absolute; left: -10px; top: 5px; width: 16px; height: 16px; background-color: #0d6efd; border-radius: 50%; border: 2px solid #fff;"></span>
                                </li>
                            </ul>
                            <ul class="timeline" style="list-style: none; padding-left: 40px; border-left: 2px solid #0d6efd;">
                                <li style="position: relative; margin-bottom: 20px;padding-left: 8px;">
                                    <span style="font-size: 0.9rem; color: #6c757d;">10<sup>th</sup> Jan 2026 5:15 PM</span>
                                    <div style="margin-top: 5px;">
                                        <strong>Booking Created</strong>
                                        <p>User booked a seat successfully.</p>
                                    </div>
                                    <span style="position: absolute; left: -10px; top: 5px; width: 16px; height: 16px; background-color: #0d6efd; border-radius: 50%; border: 2px solid #fff;"></span>
                                </li>

                                <li style="position: relative; margin-bottom: 20px;padding-left: 8px;">
                                    <span style="font-size: 0.9rem; color: #6c757d;">11<sup>th</sup> Jan 2026 9:00 AM</span>
                                    <div style="margin-top: 5px;">
                                        <strong>Payment Completed</strong>
                                        <p>Payment confirmed via wallet.</p>
                                    </div>
                                    <span style="position: absolute; left: -10px; top: 5px; width: 16px; height: 16px; background-color: #0d6efd; border-radius: 50%; border: 2px solid #fff;"></span>
                                </li>
                            </ul>
                            <table class="table table-bordered table-striped data_table">
                            <tbody>
                                <tr>
                                    <th>From</th>
                                    <td>Lahore</td>
                                    <th>To</th>
                                    <td>Rwp</td>
                                </tr>
                                <tr>
                                    <th>Departur</th>
                                    <td>15th Jan 5:14 PM</td>
                                    <th>Arrival</th>
                                    <td>15th Jan 5:14 PM</td>
                                </tr>
                                <tr>
                                    <th>Vehicle Name</th>
                                    <td>Honda City 1.3 i-VTEC</td>
                                    <th>Vehicle Reg #</th>
                                    <td>ABC-29209</td>
                                </tr>
                                <tr>
                                    <th>Driver Name</th>
                                    <td>Abdul Shakoor</td>
                                    <th>Status</th>
                                    <td>Scheduled</td>
                                </tr>
                            </tbody>
                            </table>
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
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="submit" value="submit" class="btn btn-success">Create new ride</button>
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