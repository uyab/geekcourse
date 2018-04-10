@extends('layouts.app', ['headerClass' => 'bg-dark'])

@section('content')

    <div class="container">

        @include('home._popular_courses')

        <div style="height: 4em"></div>

        @include('home._recommended_courses')
    </div>

@endsection
