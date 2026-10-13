@extends('layouts.app')

@section('title', 'Shop Catalog')

@section('content')
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <h2 style="margin: 0; color: #2c4a3e;">Arrangements & Stems</h2>
        <form action="/products/seed" method="GET">
            <button type="submit" class="btn">+ Add Sample Flower</button>
        </form>
    </div>

    @if($products->isEmpty())
        <p style="color: #777; font-style: italic;">No floral arrangements are currently available in the catalog.</p>
    @else
        <ul style="list-style: none; padding: 0;">
            @foreach($products as $product)
                <li style="padding: 1rem 0; border-bottom: 1px solid #eee; display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <strong style="font-size: 1.1rem; color: #2c4a3e;">{{ $product->name }}</strong>
                        <div style="color: #d4a373; font-weight: bold; margin-top: 0.3rem;">₱{{ number_format($product->price, 2) }}</div>
                    </div>
                    <a href="/products/{{ $product->id }}" class="btn" style="background-color: #d4a373;">View Details</a>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection