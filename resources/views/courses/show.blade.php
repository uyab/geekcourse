@extends('layouts.app')

@section('content')
    <div class="card col">
        <img class="card-img-top" src="http://via.placeholder.com/350x150" alt="Card image cap">
        <div class="card-body">

            <select class="rating">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

            <h5 class="card-title">{{ $course->title }}</h5>
            <p class="card-text">{{ $course->excerpt }}</p>
            <p class="card-text">{{ $course->author_name }}</p>
            <h6>{{ $course->formatted_date }}</h6>
        </div>
    </div>
@endsection
