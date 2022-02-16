@extends('templates.tagLayout')

@section('content')
    <h2 class="">
        {{ $data[0]->tagName }}
        <a class="text-decoration-none" href="{{ route('tags.edit', $data[0]->tagID) }}" title="Edit">
            <i class="bi-arrow-counterclockwise" style="color: green; font-size: 1.5rem"></i>
        </a>
        <a class="text-decoration-none" href="{{ route('tags.remove', $data[0]->tagID) }}" title="Delete">
            <i class="bi-trash" style="color: red; font-size: 1.5rem"></i>
        </a>
    </h2>
    <p>Total products with this tag: <span class="badge bg-primary rounded-pill">{{ $totalProducts }}</span></p>
    <p>Associated products:</p>
    @foreach ($data as $d)
        <a href="{{ route('products.show', $d->productID) }}" class="btn btn-primary">{{ $d->productName }}</a>
    @endforeach
@endsection