@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Book API Example</h1>

    <form action="/books-details" method="post">
        @csrf
        <label for="query">Enter ISBN or Title:</label>
        <input type="text" name="query" required>

        <label for="search_type">Search Type:</label>
        <select name="search_type">
            <option value="isbn">ISBN</option>
            <option value="title">Title</option>
        </select>

        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
@endsection
