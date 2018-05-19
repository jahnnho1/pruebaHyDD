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
        
      //              foreach() $producto a1 = new Producto();
         $image = $request->file('productoImagen');
        


         //  dd($image[1]);
       //  $producto a1 = new Producto();
        $producto = Producto::create([
                 'pro_nombre' => $request ->input('productoNombre'),
                 'pro_codigo_serial' => $request ->input('productoCodigo'),
                 'pro_descripcion' => $request ->input('productoDescripcion'),
                 'tpr_id' => $request ->input('productoCategoria'),
                 'pro_estado' => TipoProducto::estado_activo,
                 'pro_eliminado' => TipoProducto::eliminado_false,  
                 ]);
        
        $producto_id = $producto->pro_id;
        
        if($image != null ){  
            $cont = 0;

            foreach($image as $file){

                if($cont == 0){

                    $recurso = Recurso::create([
                     'pro_id' =>  $producto_id,
                     'rec_es_principal' =>  Recurso::es_principal,
                     'rec_estado' =>  Recurso::estado_activo,
                     'rec_eliminado' =>  Recurso::eliminado_false,               
                     'rec_url' => $file->store('productos','public'),
                     'rec_orden' => $cont,
                     'rec_tipo' => 1,
                     ]);

                }else{
                    $recurso = Recurso::create([
                     'pro_id' =>  $producto_id,
                     'rec_es_principal' =>  Recurso::no_es_princial,
                     'rec_estado' =>  Recurso::estado_activo,
                     'rec_eliminado' =>  Recurso::eliminado_false,               
                     'rec_url' => $file->store('productos','public'),
                     'rec_orden' => $cont,
                     'rec_tipo' => 1,

                     ]);

                }

                    

                    $cont++;
            }

        }

        
          return redirect()->action('administracionController@homeProducto');
        // return view('Administracion.backend.Producto.agregar');  
    }   



    public function modificarProducto($pro_id){
        

                $producto = Producto::where('producto.pro_estado','=',producto::estado_activo)
                ->where('producto.pro_estado','=',producto::estado_activo)
                ->find($pro_id);
                //dd($producto);
                $Categorias = DB::table('tipo_producto')                 
                 ->where('tipo_producto.tpr_eliminado','=',TipoProducto::eliminado_false)   
                 ->where('tipo_producto.tpr_estado','=',TipoProducto::estado_activo)                        
                 ->get();    
        
        
         return view('Administracion.backend.Producto.modificar', ['Categorias' => $Categorias,'producto' => $producto] );  
    }
    
    
     public function EjecutarModificarProducto(Request $request){
        
        
        $producto = new Producto();
        $producto = Producto::where('producto.pro_estado','=',producto::estado_activo)
                ->where('producto.pro_estado','=',producto::estado_activo)
                ->find($request->input('productoId'));    

        $producto->pro_nombre = $request->input('productoNombre');
        $producto->pro_codigo_serial = $request->input('productoCodigo');
        $producto->pro_descripcion = $request->input('productoDescripcion');
        $producto->tpr_id = $request->input('productoCategoria');
        $producto->save();
    
        
          return redirect()->action('administracionController@homeProducto');
        // return view('Administracion.backend.Producto.agregar');  
    } 
    

         public function EjecutarEstadoProducto(Request $request){
        
        
        $producto = new Producto();
        $producto = Producto::where('producto.pro_eliminado','=',producto::eliminado_false)
                ->find($request->input('mpId'));    


        if($producto->pro_estado == producto::estado_inactivo ){
            $producto->pro_estado = producto::estado_activo;
        }else{
            $producto->pro_estado = producto::estado_inactivo;
        }
        $producto->save();
    
        
          return redirect()->action('administracionController@homeProducto');
        // return view('Administracion.backend.Producto.agregar');  
    } 


    public function EjecutarEliminarProducto(Request $request){
        


        $producto = new Producto();
        $producto = Producto::find($request->input('mpId'));    

        $producto->pro_eliminado = producto::eliminado_true;
        $producto->save();
    
        
          return redirect()->action('administracionController@homeProducto');
        // return view('Administracion.backend.Producto.agregar');  
    } 
    
    
    
    
}
