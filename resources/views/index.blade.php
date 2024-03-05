@extends('layout')

@section('title', isset($user) ? 'Update ' . $user -> name : 'Create user')

@section('content')
    <a href="{{ route('users.create') }}" class="btn btn-primary" role="button">Create user</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>
                    <a href="{{ route('users.show', $user) }}">{{$user->name}}</a>
                </td>
                <td>
                    <a href="{{ route('users.show', $user) }}">{{$user->email}}</a>
                </td>
                <td>
                    <a href="{{ route('users.edit', $user) }}" type="button" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
