<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 12 May 2018 23:40:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Recurso
 * 
 * @property int $rec_id
 * @property int $usu_id
 * @property int $tpr_id
 * @property int $pro_id
 * @property int $rec_tipo
 * @property bool $rec_es_principal
 * @property string $rec_url
 * @property int $rec_orden
 * @property int $rec_estado
 * @property bool $rec_eliminado
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\User $user
 * @property \App\Models\Producto $producto
 * @property \App\Models\TipoProducto $tipo_producto
 *
 * @package App\Models
 */
class Recurso extends Eloquent
{
	protected $table = 'recurso';
	protected $primaryKey = 'rec_id';

	protected $casts = [
		'usu_id' => 'int',
		'tpr_id' => 'int',
		'pro_id' => 'int',
		'rec_tipo' => 'int',
		'rec_es_principal' => 'bool',
		'rec_orden' => 'int',
		'rec_estado' => 'int',
		'rec_eliminado' => 'bool'
	];

	protected $fillable = [
		'usu_id',
		'tpr_id',
		'pro_id',
		'rec_tipo',
		'rec_es_principal',
		'rec_url',
		'rec_orden',
		'rec_estado',
		'rec_eliminado'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'usu_id');
	}

	public function producto()
	{
		return $this->belongsTo(\App\Models\Producto::class, 'pro_id');
	}

	public function tipo_producto()
	{
		return $this->belongsTo(\App\Models\TipoProducto::class, 'tpr_id');
	}
}
