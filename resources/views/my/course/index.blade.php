@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>My Course</h1>
        <a href="{{ route('my::courses.create') }}">Create Course</a>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Course</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->status }}</td>
                    <td>
                        <a href="{{ route('my::courses.edit', $course) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
