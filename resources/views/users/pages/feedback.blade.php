@extends('users.pages.template')

@section('content')
<div class="container">
    <h2>Submit Your Review</h2>
    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf
        {{-- <div class="form-group">
            <label for="appoint_id">Appointment ID</label>
            <input type="text" name="appoint_id" class="form-control" required>
        </div> --}}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="feedback">Feedback</label>
            <textarea name="feedback" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="review">Star Rating</label><br>
            <div>
                <input type="radio" id="star1" name="review" value="1" required>
                <label for="star1">★</label>
                <input type="radio" id="star2" name="review" value="2">
                <label for="star2">★</label>
                <input type="radio" id="star3" name="review" value="3">
                <label for="star3">★</label>
                <input type="radio" id="star4" name="review" value="4">
                <label for="star4">★</label>
                <input type="radio" id="star5" name="review" value="5">
                <label for="star5">★</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit Review</button>
    </form>
</div>
@endsection
