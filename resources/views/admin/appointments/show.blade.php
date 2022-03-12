@extends('layouts.app')

@section('title', 'Vacunate | Información de la cita')

@section('content')
@include('partials.header-admin')
<main id="dashboard" class="content">
    <section id="formulario" class="section-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h1 class="text-center">Información de la cita {{$cita->code}}</h1>
                </div>
                <div class="col-12 col-sm-12 mt-5">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="form-group">
                                <p><strong>Código de la cita:</strong> {{$cita->code}}</p>
                            </div>
                            <div class="form-group">
                                <p><strong>Nombre completo del paciente:</strong> {{$cita->name}}</p>
                            </div>
                            <div class="form-group">
                                <p><strong>Email del paciente:</strong> {{$cita->email}}</p>
                            </div>
                            <div class="form-group">
                                <p><strong>Folio MiVacuna del paciente:</strong> {{$cita->folio}}</p>
                            </div>
                            <div class="form-group">
                                <p><strong>Ubicación del paciente:</strong> {{$cita->city}}, {{$cita->state}}</p>
                            </div>
                            <div class="form-group">
                                <p><strong>Observaciones del paciente:</strong><br> {{$cita->observations}}</p>
                            </div>
                            <div class="form-group">
                                <p><strong>Acciones:</strong></p>
                                <a class="btn btn-primary btn-block" href="{{URL::previous()}}">Regresar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
