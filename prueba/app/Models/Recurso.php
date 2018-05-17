<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 16 May 2018 18:38:35 +0000.
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
        
               const tipo_imagen = 1;
        const tipo_video = 2;
        
        const es_principal = 1;
        const no_es_princial = 2;
        
        const estado_activo = 0;
        const estado_inactivo = 1;
        
        const eliminado_false = 0;
        const eliminado_true = 1;
        
              
        public function getImagenAttribute($rec_url){
            
            if(!$rec_url || starts_with($rec_url, 'http')){
                return $rec_url;
            }
            return \Storage::disk('public')->url($rec_url);
            
      
        }
        

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
