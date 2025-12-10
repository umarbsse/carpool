@extends(get_private_template_name().'.layouts.dashboard.app')
@section('main_content')
        <div class="row">
          <div class="col-12">
            
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Location List</h3>
                  @include(get_private_template_name().'.widgets.dashboard.modal.add')
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped data_table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Location Type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($location as $area)
                                    <tr>
                                        <td>{{ $area['name'] }}</td>
                                        <td>
                                            @if($area['location_type'] == '1')
                                                Province
                                            @elseif($area['location_type'] == '2')
                                                District
                                            @elseif($area['location_type'] == '3')
                                                Tehsile
                                            @elseif($area['location_type'] == '4')
                                                on Demand
                                            @endif
                                        </td>
                                        <td>
                                            @if($area['is_enable'] == '2')
                                                <span class="badge badge-success"><i class="fas fa-check-circle"></i> Active</span>
                                            @else
                                                <span class="badge badge-danger"><i class="fas fa-times-circle"></i> Disable</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="#"><i class="fas fa-edit"></i> Update</a>
                                            &nbsp;&nbsp;|&nbsp;&nbsp;
                                            <a href="{{ route('location_delete', $area['id']) }}"  onclick="return confirm('Are you sure you want to delete this location?');"><i class="fas fa-trash-alt"></i> Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Location Type</th>
                                    <th>Status</th>
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