@extends('admin.dashboard')

@section('content')
    <!-- Button to Add New Service -->
    <div class="container mt-5 d-flex justify-content-between">
        <h2>Available Services</h2>
        <a href="{{ route('admin.services.create') }}" class="btn btn-success">Add New Service</a>
    </div>

    <!-- Display Services Table -->
    <div class="container mt-3" >
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
                @foreach($services as $service)
                    <tr>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->description }}</td>
                         <td>
                            <img src="{{ asset('uploads/services/' . $service->image) }}" alt="{{ $service->name }}" height="80" width="auto">
                        </td>
                        <td>${{ $service->price }}</td>
                        <td>
                            <!-- Update button -->
                            <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-warning">Edit</a>

                            <!-- Delete button -->
                            <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection

