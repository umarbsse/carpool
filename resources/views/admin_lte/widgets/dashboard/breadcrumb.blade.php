<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{$title}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">{{$title}}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row mb-2">
          <div class="col-sm-12">
            @if ($errors->any())                
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h6><i class="icon fas fa-check"></i> {{ session('success') }}</h6>
                  
                </div>
        @endif

        @if(session('error'))
                            
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h6><i class="icon fas fa-ban"></i> {{ session('error') }}</h6>
                    
                </div>
        @endif
          </div><!-- /.col -->
        </div><!-- /.row -->

      </div><!-- /.container-fluid -->
    </div>

                