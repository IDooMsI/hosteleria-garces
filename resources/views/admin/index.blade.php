@extends('layouts.app')
@section('content')
<div class="container">
    <div id="div-admin-buttons" class="row mt-3 justify-content-center">
        <div class="col-2">
            <a href="{{route('client.index')}}">
                <button class="btn btn-outline-dark rounded-pill">CLIENTES</button>
            </a>
        </div>
        <div class="col-2">
            <a href="">
                <button class="btn btn-outline-dark rounded-pill">PROVEEDORES</button>
            </a>
        </div>
        <div class="col-2">
            <a href="">
                <button class="btn btn-outline-dark rounded-pill">TRABAJOS</button>
            </a>
        </div>
        <div class="col-2">
            <a href="">
                <button class="btn btn-outline-dark rounded-pill">DIRECCIONES</button>
            </a>
        </div>
        <div class="col-2">
            <a href="">
                <button class="btn btn-outline-dark rounded-pill">PUBLICACIONES</button>
            </a>
        </div> 
    </div>
</div>
@endsection