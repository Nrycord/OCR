<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 * 
 * @property string $codigo_materia
 * @property string $nombre_materia
 * 
 * @property MateriasInscrita $materias_inscrita
 * @property MateriasImpartida $materias_impartida
 * @property DetallePensum $detalle_pensum
 *
 * @package App\Models
 */
class Materia extends Model
{
	protected $table = 'materias';
	protected $primaryKey = 'codigo_materia';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'nombre_materia'
	];

	public function materias_inscrita()
	{
		return $this->hasOne(MateriasInscrita::class, 'codigo_materia');
	}

	public function materias_impartida()
	{
		return $this->hasOne(MateriasImpartida::class, 'codigo_materia');
	}

	public function detalle_pensum()
	{
		return $this->hasOne(DetallePensum::class, 'codigo_materia');
	}
}
