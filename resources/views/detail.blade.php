@extends('head')

@section('title', $product['name'])

@section('meta-desc', $product['description'])

@section('content')
<div class="container">
    <div class="row p-3">
        <div class="isi col-md-12">
            <h1 class="mb-3 text-center">{{ $product['name'] }}</h1>
            <img src="{{ asset('assets/' . $product['image']) }}" alt="{{ $product['name'] }}" class="w-50 mx-auto d-block mb-3">
            <div class="background p-3">
                <p> <span class="fw-bold mb-3">Deskripsi:</span>  {{ $product['description'] }}</p>
                <p> <span class="fw-bold mb-3">Status:</span> {{ $product['status'] }}</p>
                <p> <span class="fw-bold">Harga:</span> {{ $product['price'] }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
