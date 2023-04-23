@extends('layouts.backend')
@section('title', env('APP_NAME'))
@section('content')
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Story </h1>
          </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                   
                    <a class="btn btn-success" href="{{url('storyIndex')}}" role="button">Back</a>
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
                <form action="{{route('admin.storyupdate', $stories->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                    
                    <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">

                            <div class="form-group">
                                <label for="greatimage">Story Image</label>
                                <img style="height: 30vh" src="uploads/story/{{$stories->greatimage}}" class="mb-2">
                            
                                <input type="file" name="greatimage" class="form-control">
                            </div>
                        </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="title">Title</label>
                                  <input type="text" name="title" class="form-control" id=""  value="{{$stories->title}}">
                              </div>
                          </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subtitle">Subtitle</label>
                                    <input type="text" name="subtitle" class="form-control" id="" value="{{$stories->subtitle}}">
                                </div>
                            </div> 
                             <div class="col-md-6">
                               <div class="form-group">
                                 <label for="description">Description</label>
                                   <textarea name="description" class="form-control"  rows="3" value="{{$stories->description}}">
                                   </textarea>
                               </div>
                             </div>
                          
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
