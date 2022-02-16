@extends('templates.productLayout')

@section('content')
    <form id="newProduct" action="{{ route('products.store') }}" method="POST">
        @csrf

        <label class="form-label" for="productID">Product Name</label>
        <input class="form-control mb-2" id="productID" name="productName" type="text" placeholder="Real good stuff">

            <label for="tags" class="form-label">Tags</label>
            <input class="form-control" list="tagsOptions" id="tags" name="tag[]" placeholder="Type to search...">
            <datalist class="" id="tagsOptions">
                @foreach ($tags as $tag)
                    <option label="{{ $tag->name }}" value="{{ $tag->id }}"></option>
                @endforeach
            </datalist>
            <div id="newTag"></div>
        <button id="addTag" type="button" class="mt-3 mb-3 btn btn-success d-block" onclick="newTag()">Add Other Tag</button>
        <input class="btn btn-primary d-block m-auto w-25" type="submit" value="Store">
    </form>
@endsection