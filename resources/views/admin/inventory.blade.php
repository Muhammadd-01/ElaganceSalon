@extends('admin.dashboard')

@section('content')
    <div class="container mt-4">
        <h2>Inventory Products</h2>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">Add New Product</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Stock</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Expiry Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $product)
                    <tr>
                        <td>{{ $product->productName }}</td>
                        <td>{{ $product->productDescription }}</td>
                        <td>
                            <img src="{{ asset('uploads/' . $product->productImage) }}" alt="{{ $product->productName }}" height="80" width="auto">
                        </td>
                        <td>{{ $product->stock }}</td>
                        <td>${{ $product->productPrice }}</td>
                        <td>{{ $product->productStatus ? 'Available' : 'Unavailable' }}</td>
                        <td>{{ $product->productExpiry }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
