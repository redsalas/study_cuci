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
                        </div>
                    @endif

                    {{ Auth::user()->name }} Bienvenido Aqui encontraras lo que necesitas!
                </div>
                <section>
                    <div class="container">
                        <div class="text-center pb-lg-4">
                            <p class="subtitle text-secondary">Todo en un solo lugar</p>
                            <h2 class="mb-5">Los mejores lugares cerca de tu Universidad</h2>
                        </div>
                        <div class="row">
                            <div class="mb-3 mb-lg-0 text-center col-lg-4">
                                <div class="icon-rounded bg-primary-light mb-3"></div>
                                <h3 class="h5">Encuentra tu hogar ideal</h3>
                                <p class="text-muted">Si eres foráneo, encuentra una casa o habitación a tus necesidades y presupuesto</p>
                            </div>
                            <div class="mb-3 mb-lg-0 text-center col-lg-4">
                                <div class="icon-rounded bg-primary-light mb-3"></div>
                                <h3 class="h5">Apoya el comercio local</h3>
                                <p class="text-muted">Los mejores lugares para comer a los al rededores del campus</p>
                            </div>
                            <div class="mb-3 mb-lg-0 text-center col-lg-4">
                                <div class="icon-rounded bg-primary-light mb-3"></div>
                                <h3 class="h5">Actividades únicas</h3>
                                <p class="text-muted">Explora las diversas actividades que puedes realizar cerca de tu universidad</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection