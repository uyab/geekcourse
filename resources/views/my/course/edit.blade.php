@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Course</h1>

        <form method="POST" action="{{ route('my::courses.update', $course) }}">
            @csrf
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $course->title) }}">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="10">
                    {{ old('description', $course->description) }}
                </textarea>
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="text" name="price" class="form-control" value="{{ old('price', $course->price) }}">
            </div>
            <div class="form-group"><input type="submit" value="UPDATE" class="btn btn-primary"></div>

        </form>
    </div>
@endsection
