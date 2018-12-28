@extends('viewClients.master')

@section('title')
    Gestión de clientes
@endsection

@section('content')
    <div class='title m-b-md'>
        Eliminar Clientes
    </div>
    <div class="">
        <form method="delete">
        <table style="width: 100%">
            <tr>
                <th>Nombre</th>
                <th>Direccion</th>
            </tr>
            <tbody>
            @forelse ($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->address }} <a href="{{route('clients.destroy', ['client' => $client->id])}}">Eliminar</a></td>
                </tr>
            @empty
                <tr>
                    <td>No hay clientes</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        </form>
    </div>
@endsection
