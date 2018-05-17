<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 16 May 2018 18:38:34 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Producto
 * 
 * @property int $pro_id
 * @property int $tpr_id
 * @property int $prov_id
 * @property int $sca_id
 * @property string $pro_codigo_serial
 * @property string $pro_nombre
 * @property string $pro_descripcion
 * @property int $pro_stock_min
 * @property int $pro_stock_max
 * @property int $pro_stock_actual
 * @property int $pro_estado
 * @property bool $pro_eliminado
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\TipoProducto $tipo_producto
 * @property \App\Models\Proveedor $proveedor
 * @property \App\Models\SubCategorium $sub_categorium
 * @property \Illuminate\Database\Eloquent\Collection $destacados
 * @property \Illuminate\Database\Eloquent\Collection $ficha_tecnicas
 * @property \Illuminate\Database\Eloquent\Collection $recursos
 *
 * @package App\Models
 */
class Producto extends Eloquent
{
	protected $table = 'producto';
	protected $primaryKey = 'pro_id';
        
        
                const estado_activo = 0;
        const estado_inactivo = 1;
        
        const eliminado_false = 0;
        const eliminado_true = 1;

	protected $casts = [
		'tpr_id' => 'int',
		'prov_id' => 'int',
		'sca_id' => 'int',
		'pro_stock_min' => 'int',
		'pro_stock_max' => 'int',
		'pro_stock_actual' => 'int',
		'pro_estado' => 'int',
		'pro_eliminado' => 'bool'
	];

	protected $fillable = [
		'tpr_id',
		'prov_id',
		'sca_id',
		'pro_codigo_serial',
		'pro_nombre',
		'pro_descripcion',
		'pro_stock_min',
		'pro_stock_max',
		'pro_stock_actual',
		'pro_estado',
		'pro_eliminado'
	];

	public function tipo_producto()
	{
		return $this->belongsTo(\App\Models\TipoProducto::class, 'tpr_id');
	}

	public function proveedor()
	{
		return $this->belongsTo(\App\Models\Proveedor::class, 'prov_id');
	}

	public function sub_categorium()
	{
		return $this->belongsTo(\App\Models\SubCategorium::class, 'sca_id');
	}

	public function destacados()
	{
		return $this->hasMany(\App\Models\Destacado::class, 'pro_id');
	}

	public function ficha_tecnicas()
	{
		return $this->hasMany(\App\Models\FichaTecnica::class, 'pro_id');
	}

	public function recursos()
	{
		return $this->hasMany(\App\Models\Recurso::class, 'pro_id');
	}
        
        public function nombreProducto($id){
            $producto = new Producto();
            $producto = Producto::find($id);
            
            return $producto->pro_nombre;
        }
        
}
