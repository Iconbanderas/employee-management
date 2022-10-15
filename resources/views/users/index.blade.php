@extends('layouts.main')

@section('content')
<div class="col-lg-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <form action="{{ route('users.index') }}" method="GET">
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <label class="sr-only" for="search">Name</label>
                        <input type="text" class="form-control" name="search" id="search" placeholder="Jane Doe">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">search</button>
                    </div>
                    <div class="col-auto">
                        <a href="{{ route('users.index') }}" class="btn btn-primary">Users</a>
                    </div>
                </div>
            </form>
            <h6 class="font-weight-bold text-primary float-right"> 
                <a href="{{ route('users.create') }}"><i class="fa fa-plus"></i> Create User</a>
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
                            <th>Username</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($users as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->first_name }}</td>
                                <td>{{ $item->last_name }}</td>
                                <td>{{ $item->email }}</td>
                                <td><a href="{{ route('users.edit', $item->id) }}"
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
