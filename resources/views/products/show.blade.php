@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
<div class="card">
    @if(isset($product) && $product)
        <h2 style="color: #2c4a3e; margin-top: 0;">{{ $product->name }}</h2>
        <p style="font-size: 1.5rem; color: #d4a373; font-weight: bold;">₱{{ number_format($product->price, 2) }}</p>
        <p style="color: #555; line-height: 1.6;">
            This signature arrangement is meticulously crafted with freshly harvested seasonal stems, wrapped in eco-friendly packaging tailored for your special order.
        </p>
        <a href="/products" class="btn" style="background-color: #666; margin-top: 1rem;">Back to Catalog</a>
    @else
        <p style="color: #d9534f; font-weight: bold;">Arrangement not found.</p>
        <a href="/products" class="btn" style="margin-top: 1rem;">Back to Catalog</a>
    @endif
</div>
@endsection