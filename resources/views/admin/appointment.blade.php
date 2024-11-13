@extends('admin.dashboard')


@section('content')
    <div class="appointments-list">
        @if($appointments->isEmpty())
            <p>No appointments found.</p>
        @else
            <ul>
                @foreach($appointments as $appointment)
                    <li>
                        <strong>{{ $appointment->user->name }}</strong> ({{ $appointment->user->email }})
                        <br>
                        Service: {{ $appointment->service->name }}
                        <br>
                        Date & Time: {{ $appointment->appointment_time }}
                        <br>
                        Status: {{ $appointment->status }}
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection


