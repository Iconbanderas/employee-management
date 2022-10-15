@extends('layouts.main')

@section('content')
<div class="col-lg-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <form action="{{ route('departments.index') }}" method="GET">
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <label class="sr-only" for="search">Name</label>
                        <input type="text" class="form-control" name="search" id="search" placeholder="Computer Science">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">search</button>
                    </div>
                    <div class="col-auto">
                        <a href="{{ route('departments.index') }}" class="btn btn-primary">All departments</a>
                    </div>
                </div>
            </form>
            <h6 class="font-weight-bold text-primary float-right"> 
                <a href="{{ route('departments.create') }}"><i class="fa fa-plus"></i> Create departments</a>
            </h6>
        </div>
        <div class="card-body">
            @if(session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('message') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="table-responsive">
                
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($departments as $department)
                            <tr>
                                <td>{{ $department->id }}</td>
                                <td>{{ $department->name }}</td>
                                <td><a href="{{ route('departments.edit', $department->id) }}"
                                        class="btn btn-primary">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
