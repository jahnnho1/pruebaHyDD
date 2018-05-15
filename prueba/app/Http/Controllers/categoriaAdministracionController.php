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
         //dd($image);
         
       //  $producto a1 = new Producto();
        $categoria = TipoProducto::create([
                 'tpr_nombre' => $request ->input('categoriaNombre'),
                 'tpr_descripcion' => $request ->input('categoriaDescripcion'),
                 'tpr_caracteristica1' => $request ->input('categoriaCaract1'),
                 'tpr_caracteristica2' => $request ->input('categoriaCaract2'),
                 'tpr_estado' => TipoProducto::estado_activo,
                 'tpr_eliminado' => TipoProducto::eliminado_false,  
                 ]);
        
        
        
        if($image != null ){        
            $recurso = Recurso::create([
                     'tpr_id' =>  $categoria->tpr_id,
                     'rec_es_principal' =>  Recurso::es_principal,
                     'rec_estado' =>  Recurso::estado_activo,
                     'rec_eliminado' =>  Recurso::eliminado_false,               
                     'rec_url' => $image->store('categorias','public'),
                     ]);
        }
        
        
        
        //$categoria->tpr_id;

        
         return redirect()->action('administracionController@homeCategoria');
        // return view('Administracion.backend.Producto.agregar');  
    } 
    
    
    
    
    
    
    
    
    
}
