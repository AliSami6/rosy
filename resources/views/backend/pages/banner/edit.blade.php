@extends('layouts.backend')
@section('title', env('APP_NAME'))
@section('content')
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update Banner </h1>
          </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                   
                    <a class="btn btn-success" href="{{url('banner')}}" role="button">Back</a>
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
                <form action="{{url('updatebanner',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label for="file">Old Banner Image</label>
                            <img height="100" width="100" src="/bannerimage/{{$data->image}}">
                        </div>
                        <div class="form-group">
                            <label for="file"> Change The Image</label>
                            <input type="file" name="file" class="form-control" id="" placeholder="Upload Image" required="">
                        </div>
                        <div class="form-group">
                            <label for="title">Banner Title</label>
                            <input type="text" name="title" class="form-control" id="" placeholder="Enter Bannner title" value="{{$data->title}}" required="">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Banner Subtitle</label>
                            <input type="text" name="subtitle" class="form-control" id="" placeholder="Enter Banner Subtitle" value="{{$data->subtitle}}" required="">
                        </div>
                        
                    </div>
                     <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary bg-primary">Submit</button>
                    </div>
                </form>
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
@endsection
@push('scripts')
@endpush
