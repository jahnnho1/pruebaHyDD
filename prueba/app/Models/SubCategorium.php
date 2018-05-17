<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 16 May 2018 18:38:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SubCategorium
 * 
 * @property int $sca_id
 * @property string $sca_nombre
 * @property string $sca_descripcion
 * @property int $sca_estado
 * @property bool $sca_eliminado
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $productos
 *
 * @package App\Models
 */
class SubCategorium extends Eloquent
{
	protected $primaryKey = 'sca_id';
        
                const estado_activo = 0;
        const estado_inactivo = 1;
        
        const eliminado_false = 0;
        const eliminado_true = 1;

	protected $casts = [
		'sca_estado' => 'int',
		'sca_eliminado' => 'bool'
	];

	protected $fillable = [
		'sca_nombre',
		'sca_descripcion',
		'sca_estado',
		'sca_eliminado'
	];

	public function productos()
	{
		return $this->hasMany(\App\Models\Producto::class, 'sca_id');
	}
}
