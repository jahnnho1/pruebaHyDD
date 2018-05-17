<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 16 May 2018 18:38:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * Class User
 * 
 * @property int $id
 * @property string $usu_nombre
 * @property string $usu_apellido
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property int $usu_estado
 * @property bool $usu_eliminado
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $recursos
 * @property \Illuminate\Database\Eloquent\Collection $tipo_usuarios
 *
 * @package App\Models
 */
class User extends Authenticatable
{


	use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



	protected $primaryKey = 'id';
        
        
        const estado_activo = 0;
        const estado_inactivo = 1;
        
        const eliminado_false = 0;
        const eliminado_true = 1;

	protected $casts = [
		'usu_estado' => 'int',
		'usu_eliminado' => 'bool'
	];



	protected $fillable = [
		'usu_nombre',
		'usu_apellido',
		'name',
		'email',
		'password',
		'remember_token',
		'usu_estado',
		'usu_eliminado'
	];

	public function recursos()
	{
		return $this->hasMany(\App\Models\Recurso::class, 'usu_id');
	}

	public function tipo_usuarios()
	{
		return $this->hasMany(\App\Models\TipoUsuario::class, 'usu_id');
	}
}
