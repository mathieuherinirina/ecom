@extends('layouts.master')

@section('pageTitle', 'users Index')

@section('content')
    <h1 class="display-6">Users</h1>
    <a href="{{route('users.create')}}">Create New</a>
    <hr/>


    <table class="table">
        <thead>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Role</th>
        <th colspan="3">Actions</th>
        </thead>

        @foreach($users as $user)
            <tr>
                <td>{{$user->nom}}</td>
                <td>{{$user->prenom}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{route('users.show', $user->id)}}" class="btn btn-info m-1">Details</a>
                        <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary m-1">Edit</a>

                        @method('DELETE')
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="id" value="{{ $user->id}}">
                            <button class="btn btn-danger m-1">Delete User</button>
                        </form>
                    </div>

                </td>
            </tr>
        @endforeach
    </table>

@endsection