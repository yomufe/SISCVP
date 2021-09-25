<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $correo
 * @property $cedula
 * @property $fecha_de_inicio
 * @property $dias_disponibles
 * @property $contrasenna
 * @property $activo
 * @property $id_departamento
 * @property $id_rol
 * @property $created_at
 * @property $updated_at
 *
 * @property Departamento $departamento
 * @property Rol $rol
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidos' => 'required',
		'correo' => 'required',
		'cedula' => 'required',
		'fecha_de_inicio' => 'required',
		'dias_disponibles' => 'required',
		'contrasenna' => 'required',
		'activo' => 'required',
		'id_departamento' => 'required',
		'id_rol' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','correo','cedula','fecha_de_inicio','dias_disponibles','contrasenna','activo','id_departamento','id_rol'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'id', 'id_departamento');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rol()
    {
        return $this->hasOne('App\Models\Rol', 'id', 'id_rol');
    }
    

}
