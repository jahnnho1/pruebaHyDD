<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 19 May 2018 23:16:05 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Order
 * 
 * @property int $ord_id
 * @property int $id
 * @property string $ord_nombre
 * @property string $ord_descripcion
 * @property int $ord_nro
 * @property int $ord_estado
 * @property bool $ord_eliminado
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $productos
 *
 * @package App\Models
 */
class Order extends Eloquent
{
	protected $primaryKey = 'ord_id';

	protected $casts = [
		'id' => 'int',
		'ord_nro' => 'int',
		'ord_estado' => 'int',
		'ord_eliminado' => 'bool'
	];

	protected $fillable = [
		'id',
		'ord_nombre',
		'ord_descripcion',
		'ord_nro',
		'ord_estado',
		'ord_eliminado'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'id');
	}

	public function productos()
	{
		return $this->belongsToMany(\App\Models\Producto::class, 'order_producto', 'ord_id', 'pro_id')
					->withTimestamps();
	}
}
