<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\productoRequest;
use App\Models\Producto;


class productoAdministracionController extends Controller
{
    //
    public function agregarProducto(){
        
        
         return view('Administracion.backend.Producto.agregar');  
    }
    
    
     public function EjecutarAgregarProducto(productoRequest $request){
        
      //   $producto a1 = new Producto();
        $producto = Producto::create([
                 'tpr_id' => 1,
                 'pro_codigo_serial' => '0101',
                 'pro_nombre' => $request ->input('especialidadTitulo'),
                 ]);

        
         return redirect()->action('administracionController@homeProducto');
        // return view('Administracion.backend.Producto.agregar');  
    }   
    

    
    
    
    
    
}
