@extends('templates.productLayout')

@section('content')
<form action="{{ route('products.show', $products[0]->id) }}">
    <div class="input-group mb-3">
        <input type="text" class="form-control" list="tagsOptions" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Details</button>
      </div>
    <datalist class="" id="tagsOptions">
        @foreach ($products as $product)
            <option label="{{ $product->name }}" value="{{ $product->id }}"></option>
        @endforeach
    </datalist>
</form>
<ul class="list-group">
    @foreach ($products as $product)
    <li class="list-group-item d-flex justify-content-between">
        <p>{{ $product->name }}</p>
        <div>
            <a href="{{ route('products.show', $product->id) }}" class="text-decoration-none" title="Details">
                <i class="bi-search" style="color: black; font-size: 1.5rem"></i>
            </a>
            <a class="text-decoration-none" href="{{ route('products.edit', $product->id) }}" title="Modify">
                <i class="bi-arrow-counterclockwise" style="color: green; font-size: 1.5rem"></i>
            </a>
            <a href="{{ route('products.remove', $product->id) }}" class="text-decoration-none" title="Delete">
                <i class="bi-trash" style="color: red; font-size: 1.5rem"></i>
            </a>
        </div>
        @endforeach
    </div>

</ul>
<div class="d-flex justify-content-center">
    {{$products->links()}}
</div>
@endsection