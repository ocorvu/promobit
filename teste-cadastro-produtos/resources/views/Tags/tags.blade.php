@extends('templates.tagLayout')



@section('content')
    <form action="{{ route('tags.show', $tags[0]->id) }}">
        <div class="input-group mb-3">
            <input type="text" class="form-control" list="tagsOptions" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Details</button>
          </div>
        <datalist class="" id="tagsOptions">
            @foreach ($tags as $tag)
                <option label="{{ $tag->name }}" value="{{ $tag->id }}"></option>
            @endforeach
        </datalist>
    </form>
<ul class="list-group">
    @foreach ($tags as $tag)
    <li class="list-group-item d-flex justify-content-between">
        <p>{{ $tag->name }}</p>
        <div>
            <a href="{{ route('tags.show', $tag->id) }}" class="text-decoration-none" title="Details">
                <i class="bi-search" style="color: black; font-size: 1.5rem"></i>
            </a>
            <a class="text-decoration-none" href="{{ route('tags.edit', $tag->id) }}" title="Edit">
                <i class="bi-arrow-counterclockwise" style="color: green; font-size: 1.5rem"></i>
            </a>
            <a href="{{ route('tags.remove', $tag->id) }}" title="Delete">
                <i class="bi-trash" style="color: red; font-size: 1.5rem"></i>
            </a>
        </div>
    @endforeach
</ul>
<div class="d-flex justify-content-center">
    {{$tags->links()}}
</div>
@endsection