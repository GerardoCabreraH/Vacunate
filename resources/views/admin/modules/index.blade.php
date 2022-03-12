@extends('layouts.app')

@section('title', 'Vacunate | Gestión de modulos')

@section('content')
@include('partials.header-admin')
<main id="dashboard" class="content">
    <section id="count" class="section-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    @include('partials.status-admin')
                    <h1 class="text-center">Gestión de modulos</h1>
                </div>
                <div class="col-12 col-sm-12">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-body text-center">
                                    <p><span class="icon-dashboard"><i class="fas fa-syringe"></i></span></p>
                                    @if ($modulos->count() == 1)
                                        <p>{{$modulos->count()}} Modulo</p>
                                    @else
                                        <p>{{$modulos->count()}} Modulos</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="modulos" class="section-light">
        <div class="container">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <h2 class="text-center">Tabla de modulos</h2>
                            <a href="{{route('modules.create')}}" class="btn btn-success btn-block">Crear</a>
                        </div>
                        <div class="col-12 col-sm-12 mt-5">
                            <ul class="list-group">
                                @forelse ($modulos as $modulo)
                                    <li class="list-group-item"><a href="{{route('modules.show', $modulo)}}">Ciudad: {{$modulo->city}} Estado: {{$modulo->state}} Vacuna: {{$modulo->brand}}</a></li>
                                @empty
                                    <li class="list-group-item">Sin resultados</li>
                                @endforelse
                            </ul>
                            {!! $modulos->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
