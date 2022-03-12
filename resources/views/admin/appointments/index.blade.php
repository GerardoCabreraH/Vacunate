@extends('layouts.app')

@section('title', 'Vacunate | Gestión de citas')

@section('content')
@include('partials.header-admin')
<main id="dashboard" class="content">
    <section id="count" class="section-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    @include('partials.status-admin')
                    <h1 class="text-center">Gestión de citas</h1>
                </div>
                <div class="col-12 col-sm-12">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-body text-center">
                                    <p><span class="icon-dashboard"><i class="fas fa-list"></i></span></p>
                                    @if ($citas->count() == 1)
                                        <p>{{$citas->count()}} Cita</p>
                                    @else
                                        <p>{{$citas->count()}} Citas</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="citas" class="section-light">
        <div class="container">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <h2 class="text-center">Tabla de citas</h2>
                        </div>
                        <div class="col-12 col-sm-12 mt-5">
                            <table id="tablaDashboard" class="table table-hover text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th>Codigo de la cita</th>
                                        <th>Nombre del paciente</th>
                                        <th>Folio MiVacuna</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($citas as $cita)
                                        <tr>
                                            <td data-label="Código de la cita">
                                                <p class="mt-2">{{$cita->code}}</p>
                                            </td>
                                            <td data-label="Nombre del paciente">
                                                <p class="mt-2">{{$cita->name}}</p>
                                            </td>
                                            <td data-label="Folio MiVacuna">
                                                <p class="mt-2">{{$cita->folio}}</p>
                                            </td>
                                            <td data-label="Acciones">
                                                <div class="form-group d-flex align-items-sm-center flex-sm-row flex-column mt-2">
                                                    <div class="p-1">
                                                        <a class="btn btn-primary" href="{{route('appointments.show', $cita)}}">Ver</a>
                                                    </div>
                                                    <div class="p-1">
                                                        <a class="btn btn-warning" href="{{route('appointments.edit', $cita)}}">Editar</a>
                                                    </div>
                                                    <div class="p-1">
                                                        <a class="btn btn-danger" href="{{ route('appointments.destroy', $cita) }}" onclick="event.preventDefault(); document.getElementById('delete-data').submit();">
                                                            Eliminar
                                                        </a>
                                                        <form id="delete-data" action="{{ route('appointments.destroy', $cita) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" data-label="Codigo" class="text-center">
                                                Sin resultados
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {!! $citas->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
