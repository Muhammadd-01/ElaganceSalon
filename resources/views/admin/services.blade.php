@extends('admin.dashboard')

@section('content')
    <!-- Button to Add New Service -->
    <div class="container mt-5 d-flex justify-content-between">
        <h2>Available Services</h2>
        <a href="{{ route('admin.servicesCreate') }}" class="btn btn-success">Add New Service</a>
    </div>

    <!-- Display Services Table -->
    <div class="container mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($service as $services)
                    <tr>
                        <td>{{ $services->name }}</td>
                        <td>{{ $services->description }}</td>
                        <td><img src="{{ asset('storage/' . $services->image) }}" alt="{{ $services->name }}" width="100"></td>
                        <td>${{ $services->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

