<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 12 May 2018 17:00:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TipoProducto
 * 
 * @property int $tpr_id
 * @property string $tpr_nombre
 * @property string $tpr_descripcion
 * @property string $tpr_caracteristica1
 * @property string $tpr_caracteristica2
 * 
 * @property \Illuminate\Database\Eloquent\Collection $productos
 * @property \Illuminate\Database\Eloquent\Collection $recursos
 *
 * @package App\Models
 */
class TipoProducto extends Eloquent
{
	protected $table = 'tipo_producto';
	protected $primaryKey = 'tpr_id';
	public $timestamps = false;

	protected $fillable = [
		'tpr_nombre',
		'tpr_descripcion',
		'tpr_caracteristica1',
		'tpr_caracteristica2'
	];

	public function productos()
	{
		return $this->hasMany(\App\Models\Producto::class, 'tpr_id');
	}

	public function recursos()
	{
		return $this->hasMany(\App\Models\Recurso::class, 'tpr_id');
	}
}
