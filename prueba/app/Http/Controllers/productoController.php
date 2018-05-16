<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Recurso;
use Illuminate\Support\Facades\DB;
use App\Models\TipoProducto;

class productoController extends Controller
{
    //
    public function vistaProducto($id)
    {
        $viewProducto = Producto::find($id);
        //dd($viewProducto);
        $Recurso = new Recurso();
        
        $imagesProducto = DB::table('producto')
        ->join('recurso','producto.pro_id','=','recurso.pro_id')
                ->where('producto.pro_id','=',$id)
        ->take(6)->get();
        
        
        $categorias = DB::table('tipo_producto')
          ->where('tipo_producto.tpr_estado','=', TipoProducto::estado_activo)
          ->where('tipo_producto.tpr_eliminado','=', TipoProducto::eliminado_false)                 
          ->get();
        
        if ($viewProducto == null){
                $viewProducto = Producto::find(2);
               // dd($viewProducto);

                $imagesProducto = DB::table('producto')
                ->join('recurso','producto.pro_id','=','recurso.pro_id')
                        ->where('producto.pro_id','=',2)
                ->take(6)->get();
            
            return view('cliente.producto', ['viewProducto' => $viewProducto,'imagesProducto' => $imagesProducto, 'Recurso' => $Recurso, 'categorias' => $categorias] );
        }
       
       // dd($imagesProducto);
        return view('cliente.producto', ['viewProducto' => $viewProducto,'imagesProducto' => $imagesProducto, 'Recurso' => $Recurso, 'categorias' => $categorias] );         
    }  
    
    
    
    public function categoria($id)
    {
        
            $categorias = DB::table('tipo_producto')
                ->where('tipo_producto.tpr_estado','=', TipoProducto::estado_activo)
                ->where('tipo_producto.tpr_eliminado','=', TipoProducto::eliminado_false)                 
                ->get();
        
        
        $productos = DB::table('producto')
                 ->join('recurso','producto.pro_id','=','recurso.pro_id')
                 ->join('tipo_producto','tipo_producto.tpr_id','=','producto.tpr_id')              
                 ->where('tipo_producto.tpr_id','=',$id)
                ->where('producto.pro_estado','=',0 )
                ->where('producto.pro_eliminado','=',0 )
                 ->paginate(12);
        $Recurso = new Recurso();
        
        //dd($nuevosProductos);
                 
        return view('cliente.accesorios', ['productos' => $productos, 'Recurso' => $Recurso, 'categorias' => $categorias] );         
    }  
    
    
    
}
