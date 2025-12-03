@extends(get_private_template_name().'.layouts.dashboard.app')

@section('main_content')
        <div class="row">
          <div class="col-12">
            
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Location List</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped data_table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Location Type</th>
                                    <th>lat</th>
                                    <th>lng</th>
                                    <th>Status</th>
                                    <th>Created at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($location as $area)
                                    <tr>
                                        <td>{{ $area['name'] }}</td>
                                        <td>{{ $area['location_type'] }}</td>
                                        <td>{{ $area['lat'] }}</td>
                                        <td>{{ $area['lng'] }}</td>
                                        <td>{{ $area['is_enable'] }}</td>
                                        <td>{{ $area['created_at'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Location Type</th>
                                    <th>lat</th>
                                    <th>lng</th>
                                    <th>Status</th>
                                    <th>Created at</th>
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
    <!-- /.content -->
@endsection