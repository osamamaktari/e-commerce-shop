@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="p-6 bg-white rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-2">Total Products</h2>
            <p class="text-3xl">{{ $productCount }}</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-2">Total Categories</h2>
            <p class="text-3xl">{{ $categoryCount }}</p>
        </div>
    </div>
</div>
@endsection
