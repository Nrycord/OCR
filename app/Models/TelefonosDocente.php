<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TelefonosDocente
 * 
 * @property int $id_docente
 * @property string $numero_tel
 * 
 * @property Docente $docente
 *
 * @package App\Models
 */
class TelefonosDocente extends Model
{
	protected $table = 'telefonos_docente';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_docente' => 'int'
	];

	protected $fillable = [
		'id_docente',
		'numero_tel'
	];

	public function docente()
	{
		return $this->belongsTo(Docente::class, 'id_docente');
	}
}
