@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                <div class="jumbotron">
                    @endif
                    <h1 class="display-4"> {{ Auth::user()->name }} Bienvenido Aqui encontraras lo que necesitas!</h1>
                    <p class="lead">Aqui encontraras ayuda para encontrar desde Casas, Habitaciones o lugares donde comer.</p>
                    <hr class="my-4">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Habitaciones</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">Restaurantes</button>
                    
                    </p>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
