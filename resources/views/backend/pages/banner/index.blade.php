@extends('layouts.backend')
@section('title', env('APP_NAME'))
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Banner List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">

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
                            <div class="card-body py-3">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Banner Title</th>
                                            <th>Banner Subtitle</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($data as $banner)
                                            <tr>


                                                <td>{{ $banner->id }}</td>
                                                <td>{{ $banner->title }}</td>
                                                <td>{{ $banner->subtitle }}</td>
                                                <td>
                                                    <img height="100" width="100"
                                                        src="/bannerimage/{{ $banner->image }}" alt="">
                                                </td>

                                                <td>
                                                    <a class="btn btn-primary"
                                                        href="{{ url('updateviewbanner', $banner->id) }}" role="button"><i
                                                            class="fas fa-edit"></i></a>
                                                 
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
