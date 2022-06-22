<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Docente
 * 
 * @property int $id_docente
 * @property string $nombres
 * @property string $apellidos
 * @property string $genero
 * @property string $estado_civil
 * @property Carbon $fecha_nacimiento
 * @property int $edad
 * @property string $dui
 * @property string $nit
 * @property string $carnet_afp
 * @property string $carnet_seguro
 * @property int $id_profesion
 * @property string $correo
 * @property string $nacionalidad
 * @property Carbon $fecha_ingreso
 * @property int $anios_servicio
 * @property string $tipo_contrato
 * @property float $salario
 * 
 * @property Profesiones $profesiones
 * @property Collection|Departamento[] $departamentos
 * @property TelefonosDocente $telefonos_docente
 * @property DireccionDocente $direccion_docente
 * @property Collection|ProximosJubilacion[] $proximos_jubilacions
 * @property Collection|Carrera[] $carreras
 * @property MateriasImpartida $materias_impartida
 *
 * @package App\Models
 */
class Docente extends Model
{
	protected $table = 'docentes';
	protected $primaryKey = 'id_docente';
	public $timestamps = false;

	protected $casts = [
		'edad' => 'int',
		'id_profesion' => 'int',
		'anios_servicio' => 'int',
		'salario' => 'float'
	];

	protected $dates = [
		'fecha_nacimiento',
		'fecha_ingreso'
	];

	protected $fillable = [
		'nombres',
		'apellidos',
		'genero',
		'estado_civil',
		'fecha_nacimiento',
		'edad',
		'dui',
		'nit',
		'carnet_afp',
		'carnet_seguro',
		'id_profesion',
		'correo',
		'nacionalidad',
		'fecha_ingreso',
		'anios_servicio',
		'tipo_contrato',
		'salario'
	];

	public function profesiones()
	{
		return $this->belongsTo(Profesiones::class, 'id_profesion');
	}

	public function departamentos()
	{
		return $this->belongsToMany(Departamento::class, 'departamentos_docente', 'id_docente', 'id_departamento');
	}

	public function telefonos_docente()
	{
		return $this->hasOne(TelefonosDocente::class, 'id_docente');
	}

	public function direccion_docente()
	{
		return $this->hasOne(DireccionDocente::class, 'id_docente');
	}

	public function proximos_jubilacions()
	{
		return $this->hasMany(ProximosJubilacion::class, 'id_docente');
	}

	public function carreras()
	{
		return $this->hasMany(Carrera::class, 'id_docente_coordinador');
	}

	public function materias_impartida()
	{
		return $this->hasOne(MateriasImpartida::class, 'id_docente');
	}
}
