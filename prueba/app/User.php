<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Recurso;
use Illuminate\Support\Facades\DB;
USE App\Notifications\ResetPasswordNotification;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


      const tipo_admin = 2;
      const tipo_usuario = 1;
      
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function TypeUser(){

        return $this->tus_id === User::tipo_admin;
    }


    public function imgUser(){

           

            $recurso =  new Recurso();
            $recurso = DB::table('recurso')->where('recurso.id','=',$this->tus_id)->first();

  


            if($recurso != null){

                $rec_url = $recurso->rec_url;

                if(!$rec_url || starts_with($rec_url, 'http')){
                    return $rec_url;
                }
                return \Storage::disk('public')->url($rec_url);

            }
            //dd($recurso);

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
