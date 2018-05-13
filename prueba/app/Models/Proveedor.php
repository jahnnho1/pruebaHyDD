<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 12 May 2018 23:40:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Proveedor
 * 
 * @property int $prov_id
 * @property string $prov_nombre
 * @property string $prov_descripcion
 * @property string $prov_institucion
 * @property string $prov_numero_celular
 * @property string $prov_numero_contacto
 * 
 * @property \Illuminate\Database\Eloquent\Collection $productos
 *
 * @package App\Models
 */
class Proveedor extends Eloquent
{
	protected $table = 'proveedor';
	protected $primaryKey = 'prov_id';
	public $timestamps = false;

	protected $fillable = [
		'prov_nombre',
		'prov_descripcion',
		'prov_institucion',
		'prov_numero_celular',
		'prov_numero_contacto'
	];

	public function productos()
	{
		return $this->hasMany(\App\Models\Producto::class, 'prov_id');
	}
}
