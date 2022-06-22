<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetallePensum
 * 
 * @property int $id_pensum
 * @property string $codigo_materia
 * @property int $ciclo
 * 
 * @property Pensum $pensum
 * @property Materia $materia
 *
 * @package App\Models
 */
class DetallePensum extends Model
{
	protected $table = 'detalle_pensum';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_pensum' => 'int',
		'ciclo' => 'int'
	];

	protected $fillable = [
		'id_pensum',
		'codigo_materia',
		'ciclo'
	];

	public function pensum()
	{
		return $this->belongsTo(Pensum::class, 'id_pensum');
	}

	public function materia()
	{
		return $this->belongsTo(Materia::class, 'codigo_materia');
	}
}
