<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\productoRequest;
use App\Http\Requests\categoriaRequest;
use App\Http\Requests\destacadoRequest;
use App\Models\Producto;
use App\Models\TipoProducto;
use App\Models\Recurso;
use Illuminate\Support\Facades\DB;
use App\Models\Destacado;
use App\Models\PromocionHome;



class homepageAdministracionController extends Controller
{
    public function agregarPromocion(){        
                $Productos = DB::table('producto')                 
                 ->where('producto.pro_eliminado','=',TipoProducto::eliminado_false)   
                 ->where('producto.pro_estado','=',TipoProducto::estado_activo)                        
                 ->get();
         return view('Administracion.backend.homeAdministracion.agregarPromocion', ['Productos' => $Productos,] );  
    }
    
    
     public function EjecutarAgregarPromocion(Request $request){
        $promocion = PromocionHome::create([
                 'prh_prod_id_1' => $request ->input('promocionIdProducto1'),
                 'prh_prod_id_2' => $request ->input('promocionIdProducto2'),
                 'prh_prod_id_3' => $request ->input('promocionIdProducto3'),
                 'prh_descripcion_1' => $request ->input('promocionDescripcion1'),
                 'prh_descripcion_2' => $request ->input('promocionDescripcion2'),
                 'prh_descripcion_3' => $request ->input('promocionDescripcion3'),
                 'prh_nombre' => $request ->input('promocionNombre'),
                 'prh_descripcion' => $request ->input('promocionDescripcion'),    
                 'prh_estado' => TipoProducto::estado_activo,
                 'prh_eliminado' => TipoProducto::eliminado_false,  
                 ]);
          return redirect()->action('administracionController@homePageAdministracion'); 
    }   

    
    public function agregarDestacado(){        
                $Productos = DB::table('producto')                 
                 ->where('producto.pro_eliminado','=',TipoProducto::eliminado_false)   
                 ->where('producto.pro_estado','=',TipoProducto::estado_activo)                        
                 ->get();
         return view('Administracion.backend.homeAdministracion.agregarDestacado', ['Productos' => $Productos,] );  
    }
    
    
    public function EjecutarAgregarDestacado(Request $request){
        $destacado = Destacado::create([
                 'des_descripcion_1' => $request->input('destacadaDescripcion1'),
                 'des_descripcion_2' => $request->input('destacadaDescripcion2'),
                 'des_descripcion_3' => $request->input('destacadaDescripcion3'),
                 'pro_id' => $request ->input('destacadaProducto'), 
                 'des_estado' => TipoProducto::estado_activo,
                 'des_eliminado' => TipoProducto::eliminado_false,  
                 ]);
           return redirect()->action('administracionController@homePageAdministracion'); 
    }  



    public function modificarDestacado($pro_id){
        
        $Productos = DB::table('producto')                 
         ->where('producto.pro_eliminado','=',TipoProducto::eliminado_false)   
         ->where('producto.pro_estado','=',TipoProducto::estado_activo)                        
         ->get();


         $destacado = Destacado::where('destacados.des_eliminado','=',TipoProducto::eliminado_false)
                ->find($pro_id);


         return view('Administracion.backend.homeAdministracion.modificar', ['Productos' => $Productos,'destacado' => $destacado] );   
    }
    
    
    public function EjecutarModificarDestacado(Request $request){
        
        
        $destacado = new Destacado();
        $destacado = Destacado::where('destacados.des_eliminado','=',producto::eliminado_false)
                   ->find($request->input('destacadoId'));    

        //dd($request->input('destacadoId'));

        $destacado->des_descripcion_1 = $request->input('destacadaDescripcion1');
        $destacado->des_descripcion_2 = $request->input('destacadaDescripcion2');
        $destacado->des_descripcion_3 = $request->input('destacadaDescripcion3');
        $destacado->pro_id = $request->input('destacadaProducto');
        $destacado->save();
    
        
         return redirect()->action('administracionController@homePageAdministracion'); 
        // return view('Administracion.backend.Producto.agregar');  
    } 
    

    public function EjecutarEstadoDestacado(Request $request){
        
        
        $destacado = new Destacado();
        $destacado = Destacado::where('destacados.des_eliminado','=',producto::eliminado_false)
                ->find($request->input('mpId'));    


        if($destacado->des_estado == producto::estado_inactivo ){
            $destacado->des_estado = producto::estado_activo;
        }else{
            $destacado->des_estado = producto::estado_inactivo;
        }
        $destacado->save();
    
        
        return redirect()->action('administracionController@homePageAdministracion'); 
        // return view('Administracion.backend.Producto.agregar');  
    } 


    public function EjecutarEliminarDestacado(Request $request){
        


        $destacado = new Destacado();
        $destacado = Destacado::find($request->input('mpId'));    

        $destacado->des_eliminado= Destacado::eliminado_true;
        $destacado->save();
    
        
     return redirect()->action('administracionController@homePageAdministracion'); 
        // return view('Administracion.backend.Producto.agregar');  
    } 
    
    
    
}
