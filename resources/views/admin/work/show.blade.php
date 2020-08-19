@extends('layouts.app')
@section('content')
<div class="container">
     <div class="card my-5">
        <div class="card-header text-center">
            <h3>Datos del trabajo</h3>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Numero</th>
                    <th>Factura</th>
                    <th>Monto</th>
                    <th>Creado</th>
                    <th>Realizado</th>
                    <th>Tecnico</th>
                    <th>Cliente</th>
                </tr>
            </thead> 
            <tbody>
                <tr>
                    <th>{{ $work->id }}</th>
                    <th>{{ $work->fc_number }}</th>
                    <th>{{ $work->price }}</th>
                    <th>{{ $work->created_at }}</th>        
                    <th>{{ $work->updated_at }}</th>
                    @if($work->user)
                    <th>{{ Ucfirst($work->user->name)}}</th>
                    @else
                    <th>{{ Ucfirst('trabajo no finalizado')}}</th>
                    @endif
                    @if($work->client)
                    <th>{{ Ucfirst($work->client->name)}}</th>
                    @else
                    <th>{{ Ucfirst('trabajo no finalizado')}}</th>
                    @endif        
                </tr>
            </tbody>
        </table>
    </div>
    <div class="card-columns">
        <div class="card">
            @foreach ($images as $image)
            <img class="card-img" src="{{ $image->name }}" alt="Card image">    
            @endforeach
        </div>
    </div>
</div>

@endsection