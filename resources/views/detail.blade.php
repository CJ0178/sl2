@extends('head')

@section('title', $product['name'])

@section('meta-desc', $product['description'])

@section('content')
<div class="row p-5">
    <div class="col-md-12 bg-warning">
        <h1 class="mb-5">{{ $product['name'] }}</h1>
        <p> <span class="fw-bold">Deskripsi:</span>  {{ $product['description'] }}</p>
        <p> <span class="fw-bold">Status:</span> {{ $product['status'] }}</p>
        <p> <span class="fw-bold">Harga:</span> {{ $product['price'] }}</p>
    </div>
</div>
@endsection
