<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\productoRequest;
use App\Http\Requests\categoriaRequest;
use App\Models\Producto;
use App\Models\TipoProducto;
use App\Models\Recurso;
use Illuminate\Support\Facades\DB;


class productoAdministracionController extends Controller
{
    //
    public function agregarProducto(){
        
                $Categorias = DB::table('tipo_producto')                 
                 ->where('tipo_producto.tpr_eliminado','=',TipoProducto::eliminado_false)   
                 ->where('tipo_producto.tpr_estado','=',TipoProducto::estado_activo)                        
                 ->get();
        
        
         return view('Administracion.backend.Producto.agregar', ['Categorias' => $Categorias,] );  
    }
    
    
     public function EjecutarAgregarProducto(productoRequest $request){
        
      //   $producto a1 = new Producto();
         $image = $request->file('productoImagen');
       //  dd($request);
         
       //  $producto a1 = new Producto();
        $producto = Producto::create([
                 'pro_nombre' => $request ->input('productoNombre'),
                 'pro_codigo_serial' => $request ->input('productoCodigo'),
                 'pro_descripcion' => $request ->input('productoDescripcion'),
                 'tpr_id' => $request ->input('productoCategoria'),
                 'pro_estado' => TipoProducto::estado_activo,
                 'pro_eliminado' => TipoProducto::eliminado_false,  
                 ]);
        
        
        
        if($image != null ){        
            $recurso = Recurso::create([
                     'pro_id' =>  $producto->pro_id,
                     'rec_es_principal' =>  Recurso::es_principal,
                     'rec_estado' =>  Recurso::estado_activo,
                     'rec_eliminado' =>  Recurso::eliminado_false,               
                     'rec_url' => $image->store('productos','public'),
                     ]);
        }

        
          return redirect()->action('administracionController@homeProducto');
        // return view('Administracion.backend.Producto.agregar');  
    }   
    

    
    
    
    
    
}
