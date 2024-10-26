@extends('admin.dashboard')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Recent Salse</h6>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">

                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($myuser as $users)
                    <tr>

                        <td>{{$users->name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->mobile}}</td>
                        <td>{{$users->age}}</td>
                        <td>{{$users->gender}}</td>
                        <td>{{$users->address}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
