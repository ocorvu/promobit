@extends('templates.productLayout')

@section('content')
    <p class="text-center m-5 fw-bold">Sure you want to delete <span class="bg-danger p-2 rounded text-white">{{$product->name}}</span>?</p>

    <form class="text-center" method="POST">
        @csrf
        @method('delete')
        <button 
            class="btn btn-success text-uppercase fw-bold"
            type="submit" 
            formaction="{{ route('products.index') }}"
            formmethod="GET">
            back</button>
        <button 
            class="btn btn-danger text-uppercase fw-bold"
            type="submit" 
            formaction="{{ route('products.destroy', $product->id) }}">delete</button>
    </form>
@endsection