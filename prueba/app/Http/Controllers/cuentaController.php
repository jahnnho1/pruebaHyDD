<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\productoRequest;
use App\Http\Requests\categoriaRequest;
use App\Models\Producto;
use App\Models\TipoProducto;
use App\Models\Recurso;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class cuentaController extends Controller
{

    public function cuenta()
    {   
        $categorias = DB::table('tipo_producto')
                ->where('tipo_producto.tpr_estado','=', TipoProducto::estado_activo)
                ->where('tipo_producto.tpr_eliminado','=', TipoProducto::eliminado_false)                 
                ->get();
        
         return view('cliente.cuenta', ['categorias' => $categorias]);        
    }


    public function postCredentials(Request $request)
		{
        $validatedData = $request->validate([
            'oldpass' => 'required|min:6',
            'password' => 'required|string|min:6',
            'password_confirmation' => 'required|same:password',
        ],[
            'oldpass.required' => 'Se requiere una contraseña anterior',
            'oldpass.min' => 'La contraseña anterior debe tener al menos 6 caracteres',
            'password.required' => 'se requiere contraseña',
            'password.min' => 'La contraseña debe tener al menos 6 caracteres',
            'password_confirmation.required' => 'Las contraseñas no coinciden'
        ]);

        $current_password = \Auth::User()->password;           
        if(\Hash::check($request->input('oldpass'), $current_password))
        {          
          $user_id = \Auth::User()->id;                       
          $obj_user = User::find($user_id);
          $obj_user->password = \Hash::make($request->input('password'));
          $obj_user->save(); 
         return redirect()->action('cuentaController@cuenta'); 
        }
        else
        {           
          $data['errorMessage'] = 'Por favor ingrese la contraseña actual correcta';
          return redirect()->action('cuentaController@cuenta', $data); 
     
        }  
    }
}
