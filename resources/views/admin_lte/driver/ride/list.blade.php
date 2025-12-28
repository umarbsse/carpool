@extends(get_private_template_name().'.layouts.dashboard.app')
@section('main_content')
        <div class="row">
          <div class="col-12">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Location List</h3>
                  @include(get_private_template_name().'.widgets.dashboard.modal.add_btn')
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped data_table">
                            <thead>
                                <tr>
                                    <th>Sr #</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Seats Availble</th>
                                    <th>Seats Booked</th>
                                    <th>Departure at</th>
                                    <th>Driver</th>
                                    <th>Vehicle</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rides as $ride)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $ride['location_start'] }}</td>
                                        <td>{{ $ride['location_end'] }}</td>
                                        <td>{{ $ride['max_seats'] }}</td>
                                        <td>{{ $ride['availble_seats'] }}</td>
                                        <td>{{ $ride['start_time'] }}</td>
                                        <td>{{ $ride['driver_name'] }}</td>
                                        <td>{{ $ride['vehicle_name'] }}</td>
                                        <td>{{ $ride['created_at'] }}</td>
                                        <td>{{ $ride['updated_at'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sr #</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Seats Availble</th>
                                    <th>Seats Booked</th>
                                    <th>Departure at</th>
                                    <th>Driver</th>
                                    <th>Vehicle</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                </div>
                <!-- /.card-body -->
              </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
@endsection