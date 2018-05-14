<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 13 May 2018 23:22:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $usu_id
 * @property string $usu_nombre
 * @property string $usu_apellido
 * @property string $usu_email
 * @property string $usu_clave
 * @property int $usu_estado
 * @property bool $usu_eliminado
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $recursos
 * @property \Illuminate\Database\Eloquent\Collection $tipo_usuarios
 *
 * @package App\Models
 */
class User extends Eloquent
{
	protected $primaryKey = 'usu_id';

	protected $casts = [
		'usu_estado' => 'int',
		'usu_eliminado' => 'bool'
	];

	protected $fillable = [
		'usu_nombre',
		'usu_apellido',
		'usu_email',
		'usu_clave',
		'usu_estado',
		'usu_eliminado'
	];

	public function recursos()
	{
		return $this->hasMany(\App\Models\Recurso::class, 'usu_id');
	}

	public function tipo_usuarios()
	{
		return $this->hasMany(\App\Models\TipoUsuario::class, 'usu_id');
	}
}
