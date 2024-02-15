@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Category</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category List</a></li>
            <li class="breadcrumb-item">Edit Category</li>
            
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Edit Category - {{ $category->name }}</h3>
                <div class="d-flex align-items-center justify-content-end">
                    <a href="{{ route('category.index') }}" class="btn btn-primary">Go Back to Category List</a>
                </div>
                </div>
                
                <div class="card-body p-0">
                    

                        <form action="{{ route('category.update', [$category->id]) }}"  method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                @include('includes.errors')
                                <div class="form-group">
                                    <label for="name">Category Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $category->name }}" id="name" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                  
                                    <textarea type="text" class="form-control" name="description" id="description" rows="10" placeholder="Enter Description">{{ $category->description }}</textarea>
                                </div>
                                
                            </div>
                            
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Category</button>
                            </div>
                        </form>
                    
                </div>
                
                </div>
        </div>
      </div>
    </div>
  </div>
@endsection