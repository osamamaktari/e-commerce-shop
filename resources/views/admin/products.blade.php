@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-4">Products</h1>

    <table class="min-w-full divide-y divide-gray-200 border">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left">Name</th>
                <th class="px-4 py-2 text-left">Category</th>
                <th class="px-4 py-2 text-left">Price</th>
                <th class="px-4 py-2 text-left">Stock</th>
                <th class="px-4 py-2 text-left">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($products as $product)
            <tr>
                <td class="px-4 py-2">{{ $product->name }}</td>
                <td class="px-4 py-2">{{ $product->category->name ?? '-' }}</td>
                <td class="px-4 py-2">{{ $product->price }}</td>
                <td class="px-4 py-2">{{ $product->stock }}</td>
                <td class="px-4 py-2 flex gap-2">
                    @can('update', $product)
                    <a href="{{ route('admin.products.edit', $product) }}" class="px-2 py-1 bg-blue-500 text-white rounded">Edit</a>
                    @endcan

                    @can('delete', $product)
                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST" onsubmit="return confirm('Confirm delete?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-2 py-1 bg-red-500 text-white rounded">Delete</button>
                    </form>
                    @endcan
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $products->links() }}
    </div>
</div>
@endsection
