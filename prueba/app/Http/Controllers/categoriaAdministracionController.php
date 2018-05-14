<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\categoriaRequest;
use App\Models\TipoProducto;

class categoriaAdministracionController extends Controller
{
    
    
    public function agregarProducto(){
        
        
         return view('Administracion.backend.categoria.agregar');  
    }
    
    
     public function EjecutarAgregarProducto(productoRequest $request){
        
      //   $producto a1 = new Producto();
        $categoria = Producto::create([
                 'tpr_id' => 1,
                 'pro_codigo_serial' => '0101',
                 'pro_nombre' => $request ->input('especialidadTitulo'),
                 ]);

        
         return redirect()->action('administracionController@homeProducto');
        // return view('Administracion.backend.Producto.agregar');  
    } 
    
    
    
    
    
    
    
    
    
}
