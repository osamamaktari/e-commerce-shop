@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-4">Categories</h1>

    <table class="min-w-full divide-y divide-gray-200 border">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left">Name</th>
                <th class="px-4 py-2 text-left">Description</th>
                <th class="px-4 py-2 text-left">Products Count</th>
                <th class="px-4 py-2 text-left">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($categories as $category)
            <tr>
                <td class="px-4 py-2">{{ $category->name }}</td>
                <td class="px-4 py-2">{{ $category->description }}</td>
                <td class="px-4 py-2">{{ $category->products_count }}</td>
                <td class="px-4 py-2 flex gap-2">
                    @can('update', $category)
                    <a href="{{ route('admin.categories.edit', $category) }}" class="px-2 py-1 bg-blue-500 text-white rounded">Edit</a>
                    @endcan

                    @can('delete', $category)
                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" onsubmit="return confirm('Confirm delete?')">
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
        {{ $categories->links() }}
    </div>
</div>
@endsection
