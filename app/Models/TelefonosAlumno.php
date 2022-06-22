<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TelefonosAlumno
 * 
 * @property string $carnet
 * @property string $numero_tel
 * 
 * @property Alumno $alumno
 *
 * @package App\Models
 */
class TelefonosAlumno extends Model
{
	protected $table = 'telefonos_alumno';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'carnet',
		'numero_tel'
	];

	public function alumno()
	{
		return $this->belongsTo(Alumno::class, 'carnet');
	}
}
