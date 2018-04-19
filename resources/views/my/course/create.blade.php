@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Course</h1>

        <form method="POST" action="{{ route('my::courses.store') }}">
            @csrf
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="10">
                    {{ old('description') }}
                </textarea>
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="text" name="price" class="form-control" value="{{ old('price') }}">
            </div>
            <div class="form-group"><input type="submit" value="SUBMIT" class="btn btn-primary"></div>

        </form>
    </div>
@endsection
