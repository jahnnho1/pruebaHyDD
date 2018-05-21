<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 19 May 2018 23:16:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Destacado
 * 
 * @property int $des_id
 * @property int $pro_id
 * @property string $des_descripcion_1
 * @property string $des_descripcion_2
 * @property string $des_descripcion_3
 * @property int $des_estado
 * @property bool $des_eliminado
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Producto $producto
 *
 * @package App\Models
 */
class Destacado extends Eloquent
{
	protected $primaryKey = 'des_id';

    const estado_activo = 0;
    const estado_inactivo = 1;
    
    const eliminado_false = 0;
    const eliminado_true = 1;

	protected $casts = [
		'pro_id' => 'int',
		'des_estado' => 'int',
		'des_eliminado' => 'bool'
	];

	protected $fillable = [
		'pro_id',
		'des_descripcion_1',
		'des_descripcion_2',
		'des_descripcion_3',
		'des_estado',
		'des_eliminado'
	];

	public function producto()
	{
		return $this->belongsTo(\App\Models\Producto::class, 'pro_id');
	}
}
