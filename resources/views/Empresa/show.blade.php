@extends('layouts.header')

@section('content')

<div id="container">
    <h1 class="titulo">{{$empresa->name}}</h1>
    <div class="ubicacion">
            <div class="oficina">
                    <div class="foto">
                        <img src="{{$empresa->url_pic_hq}}">
                    </div>
                </div>
        <div class="iframe">
            <iframe
                src="{{$empresa->url_iframe}}">
            </iframe>
        </div>
    </div>
    <div class="titulo">Oficina: {{$empresa->headquarters}}</div>
    <div class="titulo">Valoración: {{$empresa->rating}}</div>
    <div class="titulo">Opiniones: {{$empresa->review}}</div>
    <div class="titulo">Sueldo anual: {{$empresa->anual_salary}}</div>
    <div class="titulo">Oferta de trabajo nr.: {{$empresa->job_offer_id}}</div>
</div>
<form method="GET" action="/empresa/{{$empresa->id}}/edit">
    <input class="botonLista" type="submit" value="Editar">
</form>

@foreach ($opiniones as $opinion)
    <div class="titulo">Username: {{$opinion->username}}</div>
    <div class="titulo">Rating: {{$opinion->rating}}</div>
    <div class="titulo">Review: {{$opinion->review}}</div>
@endforeach

<form action="/opinion" method="POST">
        @csrf
        <br>
        <label class="campos">Username</label>
        <input class="campos" type="text" name="username" value="{{$opinion->username}}">
        <br>
        <label class="campos">Rating (1 to 5)</label>
        <input class="campos" type="text" name="rating" value="{{$opinion->rating}}">
        <br>
        <label class="campos">Opinión</label>
        <input class="campos" type="text" name="review" value="{{$opinion->review}}">
        <br>
        <a href="/empresa/{{$empresa->id}}" type="submit" class="boton">Submit Opinion</a>
</form>
@endsection