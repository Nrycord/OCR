<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Departamento
 * 
 * @property int $id_departamento
 * @property string $nombre_departamento
 * @property string $jefe_departamento
 * 
 * @property Collection|Docente[] $docentes
 * @property Collection|Carrera[] $carreras
 *
 * @package App\Models
 */
class Departamento extends Model
{
	protected $table = 'departamentos';
	protected $primaryKey = 'id_departamento';
	public $timestamps = false;

	protected $fillable = [
		'nombre_departamento',
		'jefe_departamento'
	];

	public function docentes()
	{
		return $this->belongsToMany(Docente::class, 'departamentos_docente', 'id_departamento', 'id_docente');
	}

	public function carreras()
	{
		return $this->hasMany(Carrera::class, 'id_departamento');
	}
}
