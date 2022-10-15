@extends('layouts.main')

@section('content')
<div class="col-lg-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <form action="{{ route('countries.index') }}" method="GET">
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <label class="sr-only" for="search">Name / Code</label>
                        <input type="text" class="form-control" name="search" id="search" placeholder="Uzbekistan">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">search</button>
                    </div>
                    <div class="col-auto">
                        <a href="{{ route('countries.index') }}" class="btn btn-primary">All Countries</a>
                    </div>
                </div>
            </form>
            <h6 class="font-weight-bold text-primary float-right"> 
                <a href="{{ route('countries.create') }}"><i class="fa fa-plus"></i> Create Country</a>
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
                            <th>Country Code</th>
                            <th>Country Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Country Code</th>
                            <th>Country Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($countries as $country)
                            <tr>
                                <td>{{ $country->id }}</td>
                                <td>{{ $country->country_code }}</td>
                                <td>{{ $country->name }}</td>
                                <td><a href="{{ route('countries.edit', $country->id) }}"
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
