@extends('layouts.app')

@section('template_title')
    {{ $rol->name ?? 'Mostrar Rol' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Rol</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('rol.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $rol->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
