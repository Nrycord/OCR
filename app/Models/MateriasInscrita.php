<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MateriasInscrita
 * 
 * @property string $carnet
 * @property string $codigo_materia
 * 
 * @property Alumno $alumno
 * @property Materia $materia
 *
 * @package App\Models
 */
class MateriasInscrita extends Model
{
	protected $table = 'materias_inscritas';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'carnet',
		'codigo_materia'
	];

	public function alumno()
	{
		return $this->belongsTo(Alumno::class, 'carnet');
	}

	public function materia()
	{
		return $this->belongsTo(Materia::class, 'codigo_materia');
	}
}
