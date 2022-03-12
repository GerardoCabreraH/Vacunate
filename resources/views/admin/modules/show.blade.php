@extends('layouts.app')

@section('title', 'Vacunate | Información del modulo de vacunación')

@section('content')
@include('partials.header-admin')
<main id="dashboard" class="content">
    <section id="formulario" class="section-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h1 class="text-center">Información del modulo de vacunación {{$modulo->code}}</h1>
                </div>
                <div class="col-12 col-sm-12 mt-5">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="form-group">
                                <p><strong>Código del modulo:</strong> {{$modulo->code}}</p>
                            </div>
                            <div class="form-group">
                                <p><strong>Ubicación del modulo:</strong> {{$modulo->city}}, {{$modulo->state}}</p>
                            </div>
                            <div class="form-group">
                                <p><strong>Marca de la vacuna:</strong> {{$modulo->brand}}</p>
                            </div>
                            <div class="form-group">
                                <p><strong>Fecha de vacunación:</strong> {{$diassemana[date('w', strtotime($modulo->date_module))]." ".date('d', strtotime($modulo->date_module))." de
                                ".$meses[date('n', strtotime($modulo->date_module))-1]. " del ".date('Y', strtotime($modulo->date_module))}}</p>
                            </div>
                            <div class="form-group">
                                <p><strong>Acciones:</strong></p>
                                <a class="btn btn-primary btn-block" href="{{URL::previous()}}">Regresar</a>
                                <a class="btn btn-warning btn-block" href="{{route('modules.edit', $modulo)}}">Editar</a>
                                <a class="btn btn-danger btn-block" href="{{ route('modules.destroy', $modulo) }}"
                                    onclick="event.preventDefault(); document.getElementById('delete-data').submit();">
                                    Eliminar
                                </a>
                                <form id="delete-data" action="{{ route('modules.destroy', $modulo) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
