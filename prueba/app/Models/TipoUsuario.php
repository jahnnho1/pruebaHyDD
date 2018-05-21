<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 19 May 2018 23:16:05 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TipoUsuario
 * 
 * @property int $tus_id
 * @property string $tus_nombre
 * @property int $tus_estado
 * @property bool $tus_eliminado
 * 
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class TipoUsuario extends Eloquent
{
	protected $table = 'tipo_usuario';
	protected $primaryKey = 'tus_id';
	public $timestamps = false;

	protected $casts = [
		'tus_estado' => 'int',
		'tus_eliminado' => 'bool'
	];

	protected $fillable = [
		'tus_nombre',
		'tus_estado',
		'tus_eliminado'
	];

	public function users()
	{
		return $this->hasMany(\App\Models\User::class, 'tus_id');
	}
}
