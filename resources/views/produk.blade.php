@extends('head')

@section('title', 'Product')

@section('meta-desc', 'Products')

@section('content')

<div class="content w-75 mx-auto">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets/' . $product['image']) }}"
                        alt="{{ $product['name'] }}">
                        @if($product['status'] === 'R')
                        <div class="card-body text-center product-status-r">
                            <div class="product-status ">
                                <h2 class="card-title">{{ $product['name'] }}</h2>
                                <p class="card-text fs-5">Status: {{ $product['status'] }}</p>
                                <p class="card-text">Harga: {{ $product['price'] }}</p>
                                <a href="{{ route('product.show', $product['id']) }}" class="btn btn-primary detail-button fw-bold">Detail</a>
                            </div>
                        </div>
                    @elseif($product['status'] === 'SR')
                    <div class="card-body text-center product-status-sr">
                        <div class="product-status ">
                            <h2 class="card-title">{{ $product['name'] }}</h2>
                            <p class="card-text fs-5">Status: {{ $product['status'] }}</p>
                            <p class="card-text">Harga: {{ $product['price'] }}</p>
                            <a href="{{ route('product.show', $product['id']) }}" class="btn btn-primary detail-button fw-bold">Detail</a>
                        </div>
                    </div>
                    @else
                    <div class="card-body text-center product-status-ssr text-light">
                        <div class="product-status ">
                            <h2 class="card-title">{{ $product['name'] }}</h2>
                            <p class="card-text fs-5">Status: {{ $product['status'] }}</p>
                            <p class="card-text">Harga: {{ $product['price'] }}</p>
                            <a href="{{ route('product.show', $product['id']) }}" class="btn btn-primary detail-button fw-bold">Detail</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
