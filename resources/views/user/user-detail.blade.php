{{-- @include('header')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1>Usuario: #{{$id}} </h1>
            Detalle usuario del usuario: {{$id}}
        </div>
        <div class="col-4">
            @include('sidebar')
        </div>
    </div>
</div>
@include('footer') --}}

@extends('layout')

@section('content')
<h1>Usuario: #{{$id}} </h1>
Detalle usuario del usuario: {{$id}}
@endsection