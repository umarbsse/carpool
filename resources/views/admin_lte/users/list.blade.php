@extends(get_private_template_name().'.layouts.dashboard.app')
@section('main_content')
        <div class="row">
          <div class="col-12">
            
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">User List</h3>
                  @include(get_private_template_name().'.widgets.dashboard.modal.add_btn')
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped data_table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>CNIC</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $u)
                                    <tr>
                                        <td>{{ $u['first_name'].' '.$u['last_name']  }}</td>
                                        <td>{{ $u['cnic'] }}</td>
                                        <td>{{ $u['email'] }}</td>
                                        <td>{{ $u['mobile'] }}</td>
                                        <td>
                                            @if($u['status'] == 'active')
                                                <span class="badge badge-success"><i class="fas fa-check-circle"></i> Active</span>
                                            @elseif($u['status'] == 'blocked')
                                                <span class="badge badge-danger"><i class="fas fa-check-circle"></i> Blocked</span><br/>{{ $u['status_descripition'] }}
                                            @elseif($u['status'] == 'pending')
                                                <span class="badge badge-warning"><i class="fas fa-check-circle"></i> Pending Approval</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="modal-update_btn" href="#"><i class="fas fa-edit"></i> Update</a>
                                            &nbsp;&nbsp;|&nbsp;&nbsp;
                                            <a href="{{ route('location_delete', $u['id']) }}"  onclick="return confirm('Are you sure you want to delete this location?');"><i class="fas fa-trash-alt"></i> Delete</a>
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