@extends('layouts.app')

@section('content')
<h1>Courses List</h1>
@foreach(range(1,5) as $item)
    <dl>
        <dt>Judul</dt>
        <dd>author</dd>
        <dd>rating</dd>
        <dd>harga</dd>
    </dl>
@endforeach

@endsection
