<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\categoriaRequest;
use App\Models\TipoProducto;
use App\Models\Recurso;

class categoriaAdministracionController extends Controller
{
    
    
    public function agregarCategoria(){
        
        
         return view('Administracion.backend.Categoria.agregar');  
    }
    
    
     public function EjecutarAgregarCategoria(categoriaRequest $request){
      
        $image = $request->file('categoriaImagen');        

        $categoria = TipoProducto::create([
                 'tpr_nombre' => $request ->input('categoriaNombre'),
                 'tpr_descripcion' => $request ->input('categoriaDescripcion'),
                 'tpr_caracteristica1' => $request ->input('categoriaCaract1'),
                 'tpr_caracteristica2' => $request ->input('categoriaCaract2'),
                 'tpr_estado' => TipoProducto::estado_activo,
                 'tpr_eliminado' => TipoProducto::eliminado_false,  
                 ]);
        
        $categoria_id = $categoria->tpr_id;
        
        if($image != null ){  
            $cont = 0;

            foreach($image as $file){

                if($cont == 0){

                    $recurso = Recurso::create([
                     'tpr_id' =>  $categoria_id,
                     'rec_es_principal' =>  Recurso::es_principal,
                     'rec_estado' =>  Recurso::estado_activo,
                     'rec_eliminado' =>  Recurso::eliminado_false,               
                     'rec_url' => $file->store('productos','public'),
                     'rec_orden' => $cont,
                     'rec_tipo' => 1,
                     ]);

                }else{
                    $recurso = Recurso::create([
                     'tpr_id' =>  $categoria_id,
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

        
          return redirect()->action('administracionController@homeCategoria');





    } 
    
    
    
    
    public function modificarCategoria($pro_id){
        

                $categoria = TipoProducto::where('tipo_producto.tpr_estado','=',TipoProducto::estado_activo)
                ->where('tipo_producto.tpr_eliminado','=',TipoProducto::estado_activo)
                ->find($pro_id);
          
        
        
         return view('Administracion.backend.Categoria.modificar', ['categoria' => $categoria] );  
    }
    
    
     public function EjecutarModificarCategoria(categoriaRequest $request){
        
        //dd($request);
        $Categoria = new TipoProducto();
        $Categoria = TipoProducto::find($request->input('categoriaId'));    

        $Categoria->tpr_nombre = $request->input('categoriaNombre');
        $Categoria->tpr_descripcion = $request->input('categoriaDescripcion');
        $Categoria->tpr_caracteristica1 = $request->input('categoriaCaract1');
        $Categoria->tpr_caracteristica2 = $request->input('categoriaCaract2');
        $Categoria->save();
    
        
          return redirect()->action('administracionController@homeCategoria');
        // return view('Administracion.backend.Producto.agregar');  
    } 
    

   public function EjecutarEstadoCategoria(Request $request){        
        
        $categoria = new TipoProducto();
        $categoria = TipoProducto::where('tipo_producto.tpr_eliminado','=',TipoProducto::eliminado_false)
                ->find($request->input('mpId'));    

 

        if($categoria->tpr_estado == producto::estado_inactivo ){
            $categoria->tpr_estado = producto::estado_activo;
        }else{
            $categoria->tpr_estado = producto::estado_inactivo;
        }
        $categoria->save();

    
        
          return redirect()->action('administracionController@homeCategoria');
        // return view('Administracion.backend.Producto.agregar');  
    } 


    public function EjecutarEliminarCategoria(Request $request){
       
        $categoria = new TipoProducto();
        $categoria = TipoProducto::find($request->input('mpId'));    

        $categoria->tpr_eliminado = TipoProducto::eliminado_true;
        $categoria->save();
    
        
          return redirect()->action('administracionController@homeCategoria');
        // return view('Administracion.backend.Producto.agregar');  
    } 
    
    
    
    
    
    
}
