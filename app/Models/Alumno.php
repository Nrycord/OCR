<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Alumno
 * 
 * @property string $carnet
 * @property string $nombres
 * @property string $apellidos
 * @property Carbon $fecha_nacimiento
 * @property int $edad
 * @property string $dui
 * @property string $nit
 * @property string $correo
 * @property string $estado_civil
 * @property int $anio_ingreso
 * @property string $nacionalidad
 * @property string $genero
 * @property string $estado_laboral
 * @property string $codigo_carrera
 * @property int $matricula_ciclo
 * @property string $estado_alumno
 * 
 * @property Carrera $carrera
 * @property TelefonosAlumno $telefonos_alumno
 * @property DireccionAlumno $direccion_alumno
 * @property MateriasInscrita $materias_inscrita
 *
 * @package App\Models
 */
class Alumno extends Model
{
	protected $table = 'alumnos';
	protected $primaryKey = 'carnet';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'edad' => 'int',
		'anio_ingreso' => 'int',
		'matricula_ciclo' => 'int'
	];

	protected $dates = [
		'fecha_nacimiento'
	];

	protected $fillable = [
		'nombres',
		'apellidos',
		'fecha_nacimiento',
		'edad',
		'dui',
		'nit',
		'correo',
		'estado_civil',
		'anio_ingreso',
		'nacionalidad',
		'genero',
		'estado_laboral',
		'codigo_carrera',
		'matricula_ciclo',
		'estado_alumno'
	];

	public function carrera()
	{
		return $this->belongsTo(Carrera::class, 'codigo_carrera');
	}

	public function telefonos_alumno()
	{
		return $this->hasOne(TelefonosAlumno::class, 'carnet');
	}

	public function direccion_alumno()
	{
		return $this->hasOne(DireccionAlumno::class, 'carnet');
	}

	public function materias_inscrita()
	{
		return $this->hasOne(MateriasInscrita::class, 'carnet');
	}
}
