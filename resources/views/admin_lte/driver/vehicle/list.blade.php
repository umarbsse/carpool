@extends(get_private_template_name().'.layouts.dashboard.app')
@section('main_content')
        <div class="row">
          <div class="col-12">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Vehicle List</h3>
                  @include(get_private_template_name().'.widgets.dashboard.modal.add_btn')
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped data_table">
                            <thead>
                                <tr>
                                    <th>Sr #</th>
                                    <th>Vehicle</th>
                                    <th>Registration Province</th>
                                    <th>Registration Year</th>
                                    <th>manufacture Year</th>
                                    <th>Status</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vehicles_list as $list)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $list['vehicle_name'] }}</td>
                                        <td>{{ $list['reg_province'] }}</td>
                                        <td>{{ $list['reg_year'] }}</td>
                                        <td>{{ $list['manufactor_year'] }}</td>
                                        <td>{{ $list['is_enable'] }}</td>
                                        <td>{{ $list['updated_at'] }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sr #</th>
                                    <th>Vehicle</th>
                                    <th>Registration Province</th>
                                    <th>Registration Year</th>
                                    <th>manufacture Year</th>
                                    <th>Status</th>
                                    <th>Updated At</th>
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