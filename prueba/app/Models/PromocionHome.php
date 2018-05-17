<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 16 May 2018 18:38:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PromocionHome
 * 
 * @property int $prh_id
 * @property int $prh_prod_id_1
 * @property int $prh_prod_id_2
 * @property int $prh_prod_id_3
 * @property int $prh_estado
 * @property bool $prh_eliminado
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $created_at
 * @property string $prh_descripcion_1
 * @property string $prh_descripcion_2
 * @property string $prh_descripcion_3
 * @property string $prh_nombre
 * @property string $prh_descripcion
 *
 * @package App\Models
 */
class PromocionHome extends Eloquent
{
	protected $table = 'promocion_home';
	protected $primaryKey = 'prh_id';
        
                const estado_activo = 0;
        const estado_inactivo = 1;
        
        const eliminado_false = 0;
        const eliminado_true = 1;

	protected $casts = [
		'prh_prod_id_1' => 'int',
		'prh_prod_id_2' => 'int',
		'prh_prod_id_3' => 'int',
		'prh_estado' => 'int',
		'prh_eliminado' => 'bool'
	];

	protected $fillable = [
		'prh_prod_id_1',
		'prh_prod_id_2',
		'prh_prod_id_3',
		'prh_estado',
		'prh_eliminado',
		'prh_descripcion_1',
		'prh_descripcion_2',
		'prh_descripcion_3',
		'prh_nombre',
		'prh_descripcion'
	];
}
