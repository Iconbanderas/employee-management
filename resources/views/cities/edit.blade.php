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
            <form method="POST" action="{{ route('cities.update', $city->id) }}">
                @csrf
                @method("PUT")
                <div class="row mb-3">
                    <label for="state_id" class="col-md-4 col-form-label text-md-end">{{ __('State') }}</label>

                    <div class="col-md-6">
                        <select name="state_id" id="state_id" class="form-control" required>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}" @if($state->id == $city->state_id) selected @endif>{{ $state->name }}</option>
                            @endforeach
                        </select>
                        
                        @error('state_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $city->name) }}" required autocomplete="name" autofocus>

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
                            {{ __('Update City') }}
                        </button>
                    </div>
                </div>
            </form>
            <form action="{{ route('cities.destroy', $city->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete {{ $city->name }}</button>
            </form>
        </div>
    </div>
</div>
@endsection