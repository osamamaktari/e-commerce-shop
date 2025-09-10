@extends('layouts.app')
@section('title', 'Product Details')

@section('content')
  <h1>{{ $product['name'] }}</h1>
  @if($product['on_sale'])
    <span class="badge bg-danger">On Sale</span>
  @endif
  <p class="mt-3">{{ $product['description'] }}</p>
  <p><strong>Price:</strong> {{ number_format($product['price']) }} SAR</p>
  <a href="{{ url('/shop/products') }}" class="btn btn-secondary mt-2">Back to products</a>
@endsection
