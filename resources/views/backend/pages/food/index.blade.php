@extends('layouts.backend')
@section('title', env('APP_NAME'))
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Featured Food List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">

                                <a class="btn btn-success" href="{{ url('createfood') }}" role="button">Create Food Item</a>
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
                                        <th>Food Name</th>
                                        <th>Description</th>
                                        <th>Food Image</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach ($data as $food)
                                        <tr>
                                            <td>{{ $food->id }}</td>
                                            <td>{{ $food->title }}</td>
                                            <td>{{ $food->description }}</td>
                                            <td>
                                                <img height="40" width="50" src="/foodimage/{{ $food->image }}"
                                                    alt="Food Image">
                                            </td>

                                            <td>{{ $food->price }}</td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ url('foodview', $food->id) }}"
                                                    role="button"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-danger m-1"
                                                    onclick="return confirm('Are you sure Do you want to delete this!')"
                                                    href="{{ url('deletefood', $food->id) }}" role="button"><i
                                                        class="fa fa-trash"></i></a>
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
