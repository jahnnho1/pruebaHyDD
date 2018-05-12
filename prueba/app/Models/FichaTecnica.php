<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 12 May 2018 17:00:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class FichaTecnica
 * 
 * @property int $fte_id
 * @property int $pro_id
 * @property string $fte_nombre
 * @property string $fte_descripcion
 * @property int $fte_estado
 * @property bool $fte_eliminado
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Producto $producto
 *
 * @package App\Models
 */
class FichaTecnica extends Eloquent
{
	protected $table = 'ficha_tecnica';
	protected $primaryKey = 'fte_id';

	protected $casts = [
		'pro_id' => 'int',
		'fte_estado' => 'int',
		'fte_eliminado' => 'bool'
	];

	protected $fillable = [
		'pro_id',
		'fte_nombre',
		'fte_descripcion',
		'fte_estado',
		'fte_eliminado'
	];

	public function producto()
	{
		return $this->belongsTo(\App\Models\Producto::class, 'pro_id');
	}
}
