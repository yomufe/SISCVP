
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nombre', $persona->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellidos') }}
            {{ Form::text('apellidos', $persona->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo') }}
            {{ Form::text('correo', $persona->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cedula') }}
            {{ Form::text('cedula', $persona->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('cedula', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha de inicio') }}
            {{ Form::date('fecha_de_inicio', $persona->fecha_de_inicio, ['class' => 'form-control' . ($errors->has('fecha_de_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Inicio']) }}
            {!! $errors->first('fecha_de_inicio', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    
        <div class="form-group">
            {{ Form::label('Dias disponibles') }}
            {{ Form::text('dias_disponibles', $persona->dias_disponibles, ['class' => 'form-control' . ($errors->has('dias_disponibles') ? ' is-invalid' : ''), 'placeholder' => 'Dias Disponibles']) }}
            {!! $errors->first('dias_disponibles', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Contraseña') }}
            {{ Form::text('contrasenna', $persona->contrasenna, ['class' => 'form-control' . ($errors->has('contrasenna') ? ' is-invalid' : ''), 'placeholder' => 'Contrasenna']) }}
            {!! $errors->first('contrasenna', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Activo') }}
            {{ Form::text('activo', $persona->activo, ['class' => 'form-control' . ($errors->has('activo') ? ' is-invalid' : ''), 'placeholder' => 'Activo']) }}
            {!! $errors->first('activo', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        {{--
        <div class="form-group">
            {{ Form::label('id_departamento') }}
            {{ Form::text('id_departamento', $persona->id_departamento, ['class' => 'form-control' . ($errors->has('id_departamento') ? ' is-invalid' : ''), 'placeholder' => 'Id Departamento']) }}
            {!! $errors->first('id_departamento', '<div class="invalid-feedback">:message</p>') !!}
            --}}
            
        </div>

        {{--
        <div class="form-group">
            {{ Form::label('id_rol') }}
            {{ Form::text('id_rol', $persona->id_rol, ['class' => 'form-control' . ($errors->has('id_rol') ? ' is-invalid' : ''), 'placeholder' => 'Id Rol']) }}
            {!! $errors->first('id_rol', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        --}}

        <div class="form-group">

            <label for="">Departamento</label>

            <select name="id_departamento" id="inputDepartamento_id" class="form-control">
                
                @foreach ($departamento as $departamentos)

                  <option value="{{$departamentos['id']}}">{{$departamentos['nombre']}}</option>

                @endforeach

            </select>

        </div>

        <div class="form-group">

            <label for="">Rol</label>

            <select name="id_rol" id="inputRol_id" class="form-control">
                
                @foreach ($rol as $roles)

                  <option value="{{$roles['id']}}">{{$roles['nombre']}}</option>

                @endforeach

            </select>

        </div>

        
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>