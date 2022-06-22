<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Carrera
 * 
 * @property string $codigo_carrera
 * @property string $nombre_carrera
 * @property int $id_departamento
 * @property int $duracion
 * @property int $id_docente_coordinador
 * 
 * @property Departamento $departamento
 * @property Docente $docente
 * @property Collection|Alumno[] $alumnos
 * @property Collection|Pensum[] $pensums
 *
 * @package App\Models
 */
class Carrera extends Model
{
	protected $table = 'carreras';
	protected $primaryKey = 'codigo_carrera';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_departamento' => 'int',
		'duracion' => 'int',
		'id_docente_coordinador' => 'int'
	];

	protected $fillable = [
		'nombre_carrera',
		'id_departamento',
		'duracion',
		'id_docente_coordinador'
	];

	public function departamento()
	{
		return $this->belongsTo(Departamento::class, 'id_departamento');
	}

	public function docente()
	{
		return $this->belongsTo(Docente::class, 'id_docente_coordinador');
	}

	public function alumnos()
	{
		return $this->hasMany(Alumno::class, 'codigo_carrera');
	}

	public function pensums()
	{
		return $this->hasMany(Pensum::class, 'codigo_carrera');
	}
}
