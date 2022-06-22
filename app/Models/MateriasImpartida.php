<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MateriasImpartida
 * 
 * @property int $id_docente
 * @property string $codigo_materia
 * 
 * @property Docente $docente
 * @property Materia $materia
 *
 * @package App\Models
 */
class MateriasImpartida extends Model
{
	protected $table = 'materias_impartidas';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_docente' => 'int'
	];

	protected $fillable = [
		'id_docente',
		'codigo_materia'
	];

	public function docente()
	{
		return $this->belongsTo(Docente::class, 'id_docente');
	}

	public function materia()
	{
		return $this->belongsTo(Materia::class, 'codigo_materia');
	}
}
