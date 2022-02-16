@extends('templates.tagLayout')

@section('content')
    <form action="{{ route('tags.store') }}" method="POST">
        @csrf
        <label class="form-label" for="tagID">Tag Name</label>
        <input class="form-control mb-2" id="tagID" name="name" type="text" placeholder="Real good stuff">
        <input class="btn btn-primary d-block m-auto w-25" type="submit" value="Store">
    </form>
@endsection