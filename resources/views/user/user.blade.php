{{-- @include('header')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1>{{ $title }}</h1>
            @foreach ($users as $user)
                <h2>{{ $user }}</h2>
            @endforeach
        </div>
        <div class="col-4">
            @include('sidebar')
        </div>
    </div>
</div>
@include('footer') --}}
@extends('layout')

@section('content')
    <h1>{{ $title }}</h1>
    @foreach ($users as $user)
        <h2>{{ $user }}</h2>
    @endforeach
@endsection
