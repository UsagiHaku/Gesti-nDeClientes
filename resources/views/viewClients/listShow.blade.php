@extends('viewClients.master')

@section('title')
    Gestión de clientes
@endsection

@section('content')
    <div class='title m-b-md'>
        Gestión de clientes
    </div>
    <div class="">
        <table style="width: 100%">
            <tr>
            <th>Nombre</th>
            <th>Direccion</th>
            </tr>

            @forelse ($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->address }} <a href="{{route('clients.show', ['client' => $client->id])}}">Detalles</a></td>
                </tr>
            @empty
                <tr>
                    <td>No hay clientes</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection
