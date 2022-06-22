<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DepartamentosDocente
 * 
 * @property int $id_docente
 * @property int $id_departamento
 * 
 * @property Docente $docente
 * @property Departamento $departamento
 *
 * @package App\Models
 */
class DepartamentosDocente extends Model
{
	protected $table = 'departamentos_docente';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_docente' => 'int',
		'id_departamento' => 'int'
	];

	protected $fillable = [
		'id_docente',
		'id_departamento'
	];

	public function docente()
	{
		return $this->belongsTo(Docente::class, 'id_docente');
	}

	public function departamento()
	{
		return $this->belongsTo(Departamento::class, 'id_departamento');
	}
}
