@extends('layouts.backend')
@section('title', env('APP_NAME'))
@section('content')
    <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Updae Food View </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">

                                    <a class="btn btn-success" href="{{ url('showfood') }}" role="button">Back</a>
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
                                <form action="{{ url('updatefood', $data->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label for="file">Old Food Image</label>
                                            <img height="100" width="100" src="/foodimage/{{ $data->image }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="file"> Change The Image</label>
                                            <input type="file" name="file" class="form-control"
                                                placeholder="Upload Image">
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Food Name</label>
                                            <input type="text" name="title" class="form-control"
                                                value="{{ $data->title }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="number" name="price" class="form-control"
                                                value="{{ $data->price }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <input type="text" name="description" class="form-control"
                                                value="{{ $data->description }}">
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
