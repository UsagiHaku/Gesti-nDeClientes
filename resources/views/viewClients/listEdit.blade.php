@extends('viewClients.master')

@section('title')
    Gestión de clientes
@endsection

@section('content')
    <div class='title m-b-md'>
        Editar Clientes
    </div>
    <div class="">
        <table style="width: 100%">
            <tr>git
                <th>Nombre</th>
                <th>Direccion</th>
            </tr>
            <tbody>
            @forelse ($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->address }}  <a href="{{route('clients.edit', ['client' => $client->id])}}">Editar</a></td>
                </tr>
            @empty
                <tr>
                    <td><p>No hay clientes</p></td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
