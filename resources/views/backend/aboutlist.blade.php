<!DOCTYPE html>


<html lang="en">
@include('admin.css')
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
   @include('layouts.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">About List</h1>
          </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                   
                    <a class="btn btn-success" href="{{url('aboutcreate')}}" role="button">Create About</a>
                </li>
                
              </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card">
              
              <!-- /.card-header -->
              <!-- form start -->
              @if(session()->has('message'))
              <div class="card bg-success">
                  <div class="card-header">
                      <h3 class="card-title">Success</h3>
                      <div class="card-tools">
                      {{session()->get('message')}}
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                      </button>
                      </div>
                  </div>
              </div>
              @endif
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Working Day</th>
                    <th>Working Time</th>
                    <th>Working Image</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                    
                        @foreach ($abouts as $about)
                            <tr>
                                <td>{{$about->id}}</td>
                                <td>{{$about->openingday}}</td>
                                <td>{{$about->opentime}}</td>
                                <td>
                                    <img height="60" width="80" src="uploads/abouts/{{$about->workingimage}}" alt="Working Image">
                                </td> 
                               
                                <td>
                                    
                                    
                                    <div class="row">
                                        <div>
                                            <a class="btn btn-primary mb-1" href="{{route('admin.aboutedit', $about->id)}}" role="button">Edit</a>
                                        </div>
                                        <div>
                                            <form action="{{route('admin.aboutdestroy', $about->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" name="submit" value="Delete" class="btn btn-danger bg-danger">
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        
                   
                </tbody>
            </table>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('admin.backfooter')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('admin.script')

</body>
</html>
