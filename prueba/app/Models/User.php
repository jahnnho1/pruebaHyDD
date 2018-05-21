<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 19 May 2018 23:16:05 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * 
 * @property int $id
 * @property int $tus_id
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
 * @property \App\Models\TipoUsuario $tipo_usuario
 * @property \Illuminate\Database\Eloquent\Collection $orders
 * @property \Illuminate\Database\Eloquent\Collection $recursos
 *
 * @package App\Models
 */
class User extends Authenticatable
{


	protected $primaryKey = 'id';
        
        
        const estado_activo = 0;
        const estado_inactivo = 1;
        
        const eliminado_false = 0;
        const eliminado_true = 1;


        const tipo_admin = 2;
        const tipo_usuario = 1;

	protected $casts = [
		'tus_id' => 'int',
		'usu_estado' => 'int',
		'usu_eliminado' => 'bool'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'tus_id',
		'usu_nombre',
		'usu_apellido',
		'name',
		'email',
		'password',
		'remember_token',
		'usu_estado',
		'usu_eliminado'
	];

	public function tipo_usuario()
	{
		return $this->belongsTo(\App\Models\TipoUsuario::class, 'tus_id');
	}

	public function orders()
	{
		return $this->hasMany(\App\Models\Order::class, 'id');
	}

	public function recursos()
	{
		return $this->hasMany(\App\Models\Recurso::class, 'id');
	}

	public function TypeUser(){

		return $this->tus_id === User::tipo_admin;
	}


    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

	
}
