@extends(get_private_template_name().'.layouts.dashboard.app')
@section('main_content')
        <div class="row">
          <div class="col-12">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Booking List</h3>
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
                                    <th>Seat No</th>
                                    <th>Passenger</th>
                                    <th>Booking Status</th>
                                    <th>Payment Status</th>
                                    <th>created_at</th>
                                    <th>updated_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($booking as $bok)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $bok['location_start'] }}</td>
                                        <td>{{ $bok['location_end'] }}</td>
                                        <td>{{ $bok['seat_no'] }}</td>
                                        <td>{{ $bok['passenger_id'] }}</td>
                                        <td>{{ $bok['booking_status'] }}</td>
                                        <td>{{ $bok['payment_status'] }}</td>
                                        <td>{!! mysql_time_to_humen_time($bok['created_at']) !!}</td>
                                        <td>{!! mysql_time_to_humen_time($bok['updated_at']) !!}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                    <th>Sr #</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Seat No</th>
                                    <th>Passenger</th>
                                    <th>Booking Status</th>
                                    <th>Payment Status</th>
                                    <th>Action</th>
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