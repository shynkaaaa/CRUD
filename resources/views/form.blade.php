@extends('layout')

@section('title', 'Users')

@section('content')
    <a type="button" class="btn btn-secondary mb-2" href="{{ route('users.index') }}">Back to users</a>
    <form method="POST"
          @if(isset($user))
              action="{{ route('users.update', $user) }}"
          @else
              action="{{ route('users.store') }}"
          @endif
          class="mt-3">
        @csrf
        @isset($user)
            @method('PUT')
        @endisset
        <div class="row">
            <div class="col">
                <input name="name" type="text"
                       value="{{ old('name', isset($user) ? $user -> name : null) }}"
                       class="form-control" placeholder="Name" aria-label="name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <input name="email" type="email"
                       value="{{ old('email', isset($user) ? $user -> email : null) }}"
                       class="form-control" placeholder="Email" aria-label="email">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </div>
    </form>
@endsection
