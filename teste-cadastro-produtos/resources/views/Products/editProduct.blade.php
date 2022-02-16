@extends('templates.productLayout')

@section('content')
    <form action="{{ route('products.update', $data[0]->productID)}}" method="POST">
        @csrf
        @method('patch')
        <label class="form-label" for="productID">Product Name</label>
        <input class="form-control mb-2" id="productID" name="productName" type="text" value="{{ $data[0]->productName }}">

        @foreach ($data as $d)
            
            <label for="tags" class="form-label">Tags</label>
            <input class="form-control" list="tagsOptions" id="tags" name="tag[]" value="{{ $d->tagID}}">
            <datalist class="" id="tagsOptions">
                @foreach ($tags as $tag)
                    <option label="{{ $tag->name }}" value="{{ $tag->id }}"></option>
                @endforeach
            </datalist>
        @endforeach
        <div id="newTag"></div>
        <button onclick="newTag()" type="button" class="mt-3 mb-3 btn btn-success d-block">Add Other Tag</button>
        <input class="btn btn-primary d-block m-auto w-25" type="submit" value="Store">
    </form>
@endsection