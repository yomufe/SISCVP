@extends('layouts.app')

@section('template_title')
    Persona
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Persona') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('personas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Persona') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Apellidos</th>
										<th>Correo</th>
										<th>Cedula</th>
										<th>Fecha De Inicio</th>
										<th>Dias Disponibles</th>
										<th>Contraseña</th>
										<th>Activo</th>
										<th>Departamento</th>
										<th>Rol</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personas as $persona)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $persona->nombre }}</td>
											<td>{{ $persona->apellidos }}</td>
											<td>{{ $persona->correo }}</td>
											<td>{{ $persona->cedula }}</td>
											<td>{{ $persona->fecha_de_inicio }}</td>
											<td>{{ $persona->dias_disponibles }}</td>
											<td>{{ $persona->contrasenna }}</td>
											<td>{{ $persona->activo }}</td>
											<td>{{ $persona->departamento->nombre }}</td>
											<td>{{ $persona->rol->nombre }}</td>

                                            <td>
                                                <form action="{{ route('personas.destroy',$persona->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('personas.show',$persona->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('personas.edit',$persona->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $personas->links() !!}
            </div>
        </div>
    </div>
@endsection
