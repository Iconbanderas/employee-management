@extends('layouts.main')

@section('content')
<div class="col-lg-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary float-left"> Complete the form below</h6>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('states.store') }}">
                @csrf
                
                <div class="row mb-3">
                    <label for="country_id" class="col-md-4 col-form-label text-md-end">{{ __('Country') }}</label>

                    <div class="col-md-6">
                        <select name="country_id" id="country_id" class="form-control" required>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->country_code }}</option>
                            @endforeach
                        </select>
                        
                        @error('country_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Create State') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection