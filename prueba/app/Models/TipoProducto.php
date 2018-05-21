<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 19 May 2018 23:16:05 +0000.
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
 * @property int $tpr_estado
 * @property bool $tpr_eliminado
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
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

	                const estado_activo = 0;
        const estado_inactivo = 1;
        
        const eliminado_false = 0;
        const eliminado_true = 1;

        

	protected $casts = [
		'tpr_estado' => 'int',
		'tpr_eliminado' => 'bool'
	];

	protected $fillable = [
		'tpr_nombre',
		'tpr_descripcion',
		'tpr_caracteristica1',
		'tpr_caracteristica2',
		'tpr_estado',
		'tpr_eliminado'
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
