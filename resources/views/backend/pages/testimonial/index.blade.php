@extends('layouts.backend')
@section('title', env('APP_NAME'))
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All Testimonials</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">

                                <a class="btn btn-success" href="{{ url('addtest') }}" role="button">Create New User</a>
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
                            @if (session()->has('message'))
                                <div class="card bg-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Success</h3>
                                        <div class="card-tools">
                                            {{ session()->get('message') }}
                                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                                    class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="card-body py-1 m-2">
                                 <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S/N</th>
				            <th>Person Name</th>
				            <th>Person Title</th>
				            <th>Person Details</th>
                    <th>Person Image</th>
				            <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                   
                  @foreach($data as $test)
                                <tr>
                                    
                                    <td>{{$test->id}}</td>
                                    <td>{{$test->person_name}}</td>
                                    <td>{{$test->person_title}}</td>
                                    <td>{{$test->details}}</td>
                                     
                                    <td>
                                        <img height="60" width="60" src="/testimage/{{$test->image}}" alt="">
                                    </td> 
                                    <td>
                                        
                                        <a class="btn btn-primary" href="{{url('updatetest',$test->id)}}" role="button"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger m-1" onclick="return confirm('Are you sure do you want to delete this')"  href="{{url('deletetest',$test->id)}}" role="button" style="margin-top:15px;"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        
                   
                </tbody>
            </table>
                            </div>
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
