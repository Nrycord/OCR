<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProximosJubilacion
 * 
 * @property int $id_jubilacion
 * @property int $id_docente
 * @property int $anios_servicio
 * @property string $tiempo_restante
 * 
 * @property Docente $docente
 *
 * @package App\Models
 */
class ProximosJubilacion extends Model
{
	protected $table = 'proximos_jubilacion';
	protected $primaryKey = 'id_jubilacion';
	public $timestamps = false;

	protected $casts = [
		'id_docente' => 'int',
		'anios_servicio' => 'int'
	];

	protected $fillable = [
		'id_docente',
		'anios_servicio',
		'tiempo_restante'
	];

	public function docente()
	{
		return $this->belongsTo(Docente::class, 'id_docente');
	}
}
