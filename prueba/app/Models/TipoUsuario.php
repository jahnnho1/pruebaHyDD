<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 13 May 2018 23:22:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TipoUsuario
 * 
 * @property int $tus_id
 * @property int $usu_id
 * @property string $tus_nombre
 * @property int $tus_estado
 * @property bool $tus_eliminado
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class TipoUsuario extends Eloquent
{
	protected $table = 'tipo_usuario';
	protected $primaryKey = 'tus_id';
	public $timestamps = false;

	protected $casts = [
		'usu_id' => 'int',
		'tus_estado' => 'int',
		'tus_eliminado' => 'bool'
	];

	protected $fillable = [
		'usu_id',
		'tus_nombre',
		'tus_estado',
		'tus_eliminado'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'usu_id');
	}
}
