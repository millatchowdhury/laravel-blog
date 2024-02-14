@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Category List</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
            <li class="breadcrumb-item active">Category List</li>
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
                <h3 class="card-title">Category List</h3>
                <div class="d-flex align-items-center justify-content-end">
                    <a href="{{ route('category.create') }}" class="btn btn-primary">Create Category</a>
                </div>
                </div>
                
                <div class="card-body p-0">
                <table class="table table-striped">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Post Count</th>
                    
                    <th style="width: 40px">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1.</td>
                    <td>Update software</td>
                    <td>Update software</td>
                    <td>
                        <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                    </td>
                   
                    <td><span class="badge bg-danger">55%</span></td>
                </tr>
               
               
                
                </tbody>
                </table>
                </div>
                
                </div>
        </div>
      </div>
    </div>
  </div>
@endsection