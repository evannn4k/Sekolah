@extends('layout.default')

@section('content')
    <div class="container">
        landing page
        <br>
        <a href="{{ route("login") }}" class="btn btn-primary">login</a>
    </div>
@endsection
