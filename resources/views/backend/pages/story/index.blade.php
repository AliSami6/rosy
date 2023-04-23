@extends('layouts.backend')
@section('title', env('APP_NAME'))
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Story List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">

                                <a class="btn btn-success" href="{{ url('storyCreate') }}" role="button">Create Story</a>
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

                                        
                                        <th>Title</th>
                                        <th>Subtitle</th>
                                        <th>Description</th>
                                        <th>Story Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach ($stories as $story)
                                        <tr>
                                            <td>{{ $story->id }}</td>
                                            <td>{{ $story->title }}</td>
                                            <td>{{ $story->subtitle }}</td>
                                            <td>{{ $story->description }}</td>
                                            <td>
                                                <img height="100" width="100"
                                                    src="uploads/story/{{ $story->storyone }}" alt="Greate Story Image">
                                            </td>

                                            <td>
                                                <div class="row justify-content-center">
                                                    <div class="p-2">
                                                        <a class="btn btn-primary mb-1"
                                                            href="{{ route('admin.storyEdit', $story->id) }}"
                                                            role="button"><i class="fas fa-edit"></i></a>
                                                    </div>
                                                    <div>
                                                       
                                                    </div>
                                                </div>
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
