<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Recurso;
use Illuminate\Support\Facades\DB;

class productoController extends Controller
{
    //
    public function vistaProducto($id)
    {
        $viewProducto = Producto::find($id);
      //  dd($viewProducto);
        
                 $imagesProducto = DB::table('producto')
                 ->join('recurso','producto.pro_id','=','recurso.pro_id')
                         ->where('producto.pro_id','=',$id)
                 ->take(6)->get();
       
       // dd($imagesProducto);
        return view('cliente.producto', ['viewProducto' => $viewProducto,'imagesProducto' => $imagesProducto] ); 
        
    }  
    
    
    
}
