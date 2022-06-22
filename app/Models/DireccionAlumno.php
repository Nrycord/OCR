<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DireccionAlumno
 * 
 * @property string $carnet
 * @property string $direccion
 * 
 * @property Alumno $alumno
 *
 * @package App\Models
 */
class DireccionAlumno extends Model
{
	protected $table = 'direccion_alumno';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'carnet',
		'direccion'
	];

	public function alumno()
	{
		return $this->belongsTo(Alumno::class, 'carnet');
	}
}
