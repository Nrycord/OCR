<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Profesiones
 * 
 * @property int $id_profesion
 * @property string $nombre_profesion
 * 
 * @property Collection|Docente[] $docentes
 *
 * @package App\Models
 */
class Profesiones extends Model
{
	protected $table = 'profesiones';
	protected $primaryKey = 'id_profesion';
	public $timestamps = false;

	protected $fillable = [
		'nombre_profesion'
	];

	public function docentes()
	{
		return $this->hasMany(Docente::class, 'id_profesion');
	}
}
