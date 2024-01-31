@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Books Details</h1>
        <div class="d-flex justify-content-between">
            <a href="/search-book" class="btn btn-warning me-2">Search Book</a>
            <a href="/user-details" class="btn btn-primary ms-2">User Details</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Authors</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @isset($bookInfo)
            @foreach ($bookInfo as $book)
            <tr>
                <td>
                    @if (isset($book['title']))
                        {{ $book['title'] }}
                    @else
                        {{ '-' }}
                    @endif
                </td>
                <td>
                    @if (isset($book['authors'][0]['name']))
                        {{ $book['authors'][0]['name'] }}
                    @else
                        {{ '-' }}
                    @endif
                </td>
                <td>
                    <button class="btn btn-success add-btn" data-url="@if (isset($book['url'])){{ $book['url'] }}@else{{ '-' }}@endif" data-title="@if (isset($book['title'])){{ $book['title'] }}@else{{ '-' }}@endif" data-authors="@if (isset($book['authors'][0]['name'])){{ $book['authors'][0]['name'] }}@else{{ '-' }}@endif" data-pages="@if (isset($book['number_of_pages'])){{ $book['number_of_pages'] }}@else{{ '-' }}@endif" data-publishers="@if (isset($book['publishers'][0]['name'])){{ $book['publishers'][0]['name'] }}@else{{ '-' }}@endif" data-publish_date="@if (isset($book['publish_date'])){{ $book['publish_date'] }}@else{{ '-' }}@endif">
                        Add
                    </button>
                </td>
            </tr>
            @endforeach
            @endisset
        </tbody>
    </table>
</div>
@endsection
