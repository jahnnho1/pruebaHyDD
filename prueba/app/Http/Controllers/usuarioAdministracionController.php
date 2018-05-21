<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\productoRequest;
use App\Http\Requests\categoriaRequest;
use App\Models\Producto;
use App\Models\TipoProducto;
use App\Models\Recurso;
use App\Models\User;
use App\Models\TipoUsuario;
use Illuminate\Support\Facades\DB;

class usuarioAdministracionController extends Controller
{
    public function modificar($pro_id){        
        $TipoUsuario = DB::table('tipo_usuario')                 
         ->where('tipo_usuario.tus_eliminado','=',TipoProducto::eliminado_false)   
         ->where('tipo_usuario.tus_estado','=',TipoProducto::estado_activo)                        
         ->get();
         $usuario = User::where('users.usu_eliminado','=',TipoProducto::eliminado_false)
                ->find($pro_id);
         return view('Administracion.backend.usuario.modificar', ['TipoUsuario' => $TipoUsuario,'usuario' => $usuario] );   
    }
    
    
    public function EjecutarModificar(Request $request){
        $usuario = new User();
        $usuario = User::where('users.usu_eliminado','=',producto::eliminado_false)
                   ->find($request->input('usuarioId'));    
        $usuario->name = $request->input('usuarioNombre');
        $usuario->usu_apellido = $request->input('usuarioApellido');
        $usuario->email = $request->input('usuarioEmail');
        $usuario->tus_id = $request->input('usuarioTipoUsuario');
        $usuario->save();
         return redirect()->action('administracionController@homeUsuario');   
    } 
    

    public function EjecutarEstado(Request $request){
        $usuario = new User();
        $usuario = User::where('users.usu_eliminado','=',producto::eliminado_false)
                ->find($request->input('mpId'));  
        if($usuario->usu_estado == producto::estado_inactivo ){
            $usuario->usu_estado = producto::estado_activo;
        }else{
            $usuario->usu_estado = producto::estado_inactivo;
        }
        $usuario->save();
        return redirect()->action('administracionController@homeUsuario'); 
        // return view('Administracion.backend.Producto.agregar');  
    } 


    public function EjecutarEliminar(Request $request){
        $usuario = new User();
        $usuario = User::find($request->input('mpId'));  
        $usuario->usu_eliminado= producto::eliminado_true;
        $usuario->save();
     return redirect()->action('administracionController@homeUsuario'); 
        // return view('Administracion.backend.Producto.agregar');  
    } 
}
