@extends('viewClients.master')

@section('title')
    Captura de clientes
@endsection

@section('content')

    <div class="title m-b-md">
        Actualizar Clientes
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cliente</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="post" action="{{ route('clients.update', ['client' => $client->id])}}">
                            {!! csrf_field() !!}
                            <input name="_method" type="hidden" value="PUT">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="col-md-6 control-label">Nombre</label>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="name" required="El nombre es requerido" value="{{ $client->name }}">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('addres') ? ' has-error' : '' }}">
                                <label class="col-md-6 control-label">Dirección</label>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="address" required="La dirección es requerida" value="{{ $client->address }}">

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i>Actualizar Cliente
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
