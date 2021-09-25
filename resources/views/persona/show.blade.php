@extends('layouts.app')

@section('template_title')
    {{ $persona->name ?? 'Show Persona' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Persona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personas.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $persona->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $persona->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $persona->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $persona->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Inicio:</strong>
                            {{ $persona->fecha_de_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Dias Disponibles:</strong>
                            {{ $persona->dias_disponibles }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $persona->contrasenna }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $persona->activo }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $persona->id_departamento }}
                        </div>
                        <div class="form-group">
                            <strong>Rol:</strong>
                            {{ $persona->id_rol }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
