<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DireccionDocente
 * 
 * @property int $id_docente
 * @property string $direccion
 * 
 * @property Docente $docente
 *
 * @package App\Models
 */
class DireccionDocente extends Model
{
	protected $table = 'direccion_docente';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_docente' => 'int'
	];

	protected $fillable = [
		'id_docente',
		'direccion'
	];

	public function docente()
	{
		return $this->belongsTo(Docente::class, 'id_docente');
	}
}
