@extends('templates.tagLayout')

@section('content')
    <form action="{{ route('tags.update', $tag->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <label class="form-label" for="tagID">Tag Name</label>
        <input class="form-control mb-2" id="tagID" name="tagName" type="text" value="{{ $tag->name }}">
        <input class="btn btn-primary d-block m-auto w-25" type="submit" value="Store">
    </form>
@endsection