<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\productoRequest;
use App\Http\Requests\categoriaRequest;
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
                 'des_descripcion_1' => $request ->input('destacadaDescripcion1'),
                 'des_descripcion_2' => $request ->input('destacadaDescripcion2'),
                 'des_descripcion_3' => $request ->input('destacadaDescripcion3'),
                 'pro_id' => $request ->input('destacadaProducto'), 
                 'des_estado' => TipoProducto::estado_activo,
                 'des_eliminado' => TipoProducto::eliminado_false,  
                 ]);
          return redirect()->action('administracionController@homePageAdministracion'); 
    }  
    
    
    
}
