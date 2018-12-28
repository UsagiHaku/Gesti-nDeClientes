@extends('viewClients.master')

@section('title')
    Consulta de clientes
@endsection


@section('content')
<div class="title m-b-md">
    Consulta de clientes             
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Cliente</div>
                <div class="panel-body">
                    <strong>Nombre:</strong> {{ $client->name }} 
                    <br>
                    <strong>Dirección:</strong> {{ $client->address }}                     
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
