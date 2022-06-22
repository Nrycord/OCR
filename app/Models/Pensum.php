<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pensum
 * 
 * @property int $id_pensum
 * @property string $codigo_carrera
 * @property int $cantidad_ciclos
 * @property int $anio_plan
 * 
 * @property Carrera $carrera
 * @property DetallePensum $detalle_pensum
 *
 * @package App\Models
 */
class Pensum extends Model
{
	protected $table = 'pensum';
	protected $primaryKey = 'id_pensum';
	public $timestamps = false;

	protected $casts = [
		'cantidad_ciclos' => 'int',
		'anio_plan' => 'int'
	];

	protected $fillable = [
		'codigo_carrera',
		'cantidad_ciclos',
		'anio_plan'
	];

	public function carrera()
	{
		return $this->belongsTo(Carrera::class, 'codigo_carrera');
	}

	public function detalle_pensum()
	{
		return $this->hasOne(DetallePensum::class, 'id_pensum');
	}
}
