@extends('templates.productLayout')

@section('content')
    <h1 class="">
        {{ $data[0]->productName }}
        <a class="text-decoration-none" href="{{ route('products.edit', $data[0]->productID) }}" title="Modify">
            <i class="bi-arrow-counterclockwise" style="color: green; font-size: 1.5rem"></i>
        </a>
        <a class="text-decoration-none" href="{{ route('products.remove', $data[0]->productID) }}" title="Delete">
            <i class="bi-trash" style="color: red; font-size: 1.5rem"></i>
        </a>
    </h1>
    <p class="">Tags associadas:</p>
    @foreach ($data as $d)
        <a href="{{ route('tags.show', $d->tagID) }}" class="btn btn-primary">{{ $d->tagName }}</a>
    @endforeach
@endsection