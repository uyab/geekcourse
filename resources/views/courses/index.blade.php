@extends('layouts.app')

@section('content')
<h1>Courses List</h1>
<div class="row">
@foreach($courses as $course)
    @include('courses._card', ['item' => $course])
@endforeach
</div>

@endsection
