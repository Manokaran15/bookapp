@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>User Details</h1>
        <a href="/search-book" class="btn btn-warning me-2">Search Book</a>
    </div>

    {{-- Auth User Table --}}
    <h3 class="text-center p-3">Auth User Table</h3>
    <table class="table auth-user-table">
        <thead>
            <tr>
                <th scope="col">User Id</th>
                <th scope="col">Title</th>
                <th scope="col">Authors</th>
                <th scope="col">Number of Pages</th>
                <th scope="col">Publishers</th>
                <th scope="col">Publish Date</th>
                <th scope="col">URL</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @isset($auth_users)
            @foreach ($auth_users as $auth_user)
            <tr>
                <td>{{ $auth_user['user_id'] }}</td>
                <td>{{ $auth_user['title'] }}</td>
                <td>{{ $auth_user['authors'] }}</td>
                <td>{{ $auth_user['pages'] }}</td>
                <td>{{ $auth_user['publishers'] }}</td>
                <td>{{ $auth_user['publish_date'] }}</td>
                <td>{{ $auth_user['url'] }}</td>
                <td><a href="/delete-book/{{$auth_user['id']}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
            @endisset
        </tbody>
    </table>

    {{-- Other User Table --}}
    <h3 class="text-center p-3">Other User Table</h3>
    <table class="table other-user-table">
        <thead>
            <tr>
                <th scope="col">User Id</th>
                <th scope="col">Title</th>
                <th scope="col">Authors</th>
                <th scope="col">Number of Pages</th>
                <th scope="col">Publishers</th>
                <th scope="col">Publish Date</th>
                <th scope="col">URL</th>
            </tr>
        </thead>
        <tbody>
            @isset($other_users)
            @foreach ($other_users as $other_user)
            <tr>
                <td>{{ $other_user['user_id'] }}</td>
                <td>{{ $other_user['title'] }}</td>
                <td>{{ $other_user['authors'] }}</td>
                <td>{{ $other_user['pages'] }}</td>
                <td>{{ $other_user['publishers'] }}</td>
                <td>{{ $other_user['publish_date'] }}</td>
                <td>{{ $other_user['url'] }}</td>
            </tr>
            @endforeach
            @endisset
        </tbody>
    </table>
</div>
@endsection

