@extends('layouts.backend')
@section('title', env('APP_NAME'))
@section('content')
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update All Testimonials </h1>
          </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                   
                    <a class="btn btn-success" href="{{url('showtest')}}" role="button">Back</a>
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
                    <form action="{{url('updateTestData',$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="person_name">Person Name</label>
                                <input type="text" name="person_name" class="form-control" id="" value="{{$data->person_name}}">
                            </div>
                            <div class="form-group">
                                <label for="person_title">Person Title</label>
                                <input type="text" name="person_title" class="form-control" id="" value="{{$data->person_title}}">
                            </div>
                            <div class="form-group">
                                <label for="details">Person Details</label>
                                <input type="text" name="details" class="form-control" id="" value="{{$data->details}}">
                            </div>
                           
                          <div class="form-group">
                                <label for="file">Old Image</label>
                                <img height="100" width="100" src="/testimage/{{$data->image}}">
                            </div>
                            <div class="form-group">
                                <label for="file"> Change The Image</label>
                                <input type="file" name="file" class="form-control" id="" placeholder="Upload Image">
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
