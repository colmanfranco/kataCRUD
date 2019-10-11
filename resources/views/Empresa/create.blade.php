@extends('layouts.header')

@section('content')

<div>
    <h1 class="titulo">Subir Empresa</h1>
    @if ($errors->any())
        <p>Completa todos los campos</p>
    @endif
    <form id="create" class="formulario" action="/empresa" method="POST" >
        @csrf
        <br>
        <label class="campos">Empresa</label>
        <input class="campos" type="text" name="name" value="{{$empresa->name}}" placeholder="nombre de empresa">
        <label class="campos">Oficinas centrales</label>
        <input class="campos" type="text" name="headquarters" value="{{$empresa->headquarters}}" placeholder="ciudad">
        <label class="campos">Ubicación</label>
        <input class="campos" type="text" name="url_iframe" value="{{$empresa->url_iframe}}">
        <label class="campos">Foto Url</label>
        <input class="campos" type="text" name="url_pic_hq" value="{{$empresa->url_pic_hq}}">
        <label class="campos">Sueldo</label>
        <input class="campos" type="text" name="anual_salary" value="{{$empresa->anual_salary}}">
        <div class="botones">
            <input class="boton" type="submit" value="Subir">
            <a href="/empresa" type="submit" class="boton">Listar Empresas</a>
        </div>
    </form>
</div>

@endsection

