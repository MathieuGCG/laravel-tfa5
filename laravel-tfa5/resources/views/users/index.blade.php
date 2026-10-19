@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
<div class="card shadow-sm p-4">
    <h2 class="mb-3">User Accounts</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['username'] }}</td>
                    <td>{{ $user['full_name'] }}</td>
                    <td>{{ $user['role'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection