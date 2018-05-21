<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 19 May 2018 23:16:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OrderProducto
 * 
 * @property int $ord_id
 * @property int $pro_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Order $order
 * @property \App\Models\Producto $producto
 *
 * @package App\Models
 */
class OrderProducto extends Eloquent
{
	protected $table = 'order_producto';
	public $incrementing = false;

	protected $casts = [
		'ord_id' => 'int',
		'pro_id' => 'int'
	];

	public function order()
	{
		return $this->belongsTo(\App\Models\Order::class, 'ord_id');
	}

	public function producto()
	{
		return $this->belongsTo(\App\Models\Producto::class, 'pro_id');
	}
}
