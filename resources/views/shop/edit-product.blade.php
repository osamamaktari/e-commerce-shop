@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-6">Edit Product</h1>


    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-6">
            <ul class="list-disc pl-6">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('products.update', $product->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label class="block mb-1 font-medium">Product Name</label>
            <input type="text" name="name" value="{{ old('name', $product->name) }}"
                   class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block mb-1 font-medium">Price</label>
            <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}"
                   class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block mb-1 font-medium">Description</label>
            <textarea name="description" class="w-full border p-2 rounded" rows="4">{{ old('description', $product->description) }}</textarea>
        </div>

        <div>
            <label class="inline-flex items-center">
                <input type="checkbox" name="on_sale" value="1" {{ old('on_sale', $product->on_sale) ? 'checked' : '' }}>
                <span class="ml-2">On Sale?</span>
            </label>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">
            Update Product
        </button>
    </form>
</div>
@endsection
