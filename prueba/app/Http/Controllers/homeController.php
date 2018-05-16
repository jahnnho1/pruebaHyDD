<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Recurso;
use Illuminate\Support\Facades\DB;
use App\Models\TipoProducto;

class homeController extends Controller
{
    //
    
    public function home()
    {
         //para realizar una quert
         $nuevosProductos = DB::table('producto')
                 ->join('recurso','producto.pro_id','=','recurso.pro_id')
                 ->join('tipo_producto','tipo_producto.tpr_id','=','producto.tpr_id')               
                 ->take(6)->get();
     
         $Recurso = new Recurso();
         
         $categorias = DB::table('tipo_producto')
                ->where('tipo_producto.tpr_estado','=', TipoProducto::estado_activo)
                ->where('tipo_producto.tpr_eliminado','=', TipoProducto::eliminado_false)                 
                ->get();
         
         
    //SELECT * FROM producto inner join recurso on producto.pro_id = recurso.pro_id 
    //inner join tipo_producto on tipo_producto.tpr_id = producto.tpr_id
         
        // $nuevosProductos = Recurso::find($pene);
        // dd($nuevosProductos);
        
         return view('welcome', ['nuevosProductos' => $nuevosProductos,'Recurso' => $Recurso, 'categorias' => $categorias] );        
    }
    
    
    public function homeServicio()
    {   
        $categorias = DB::table('tipo_producto')
                ->where('tipo_producto.tpr_estado','=', TipoProducto::estado_activo)
                ->where('tipo_producto.tpr_eliminado','=', TipoProducto::eliminado_false)                 
                ->get();
        
         return view('servicios', ['categorias' => $categorias]);        
    }
    
    
    public function homeEmpresa()
    {      
                 $categorias = DB::table('tipo_producto')
                ->where('tipo_producto.tpr_estado','=', TipoProducto::estado_activo)
                ->where('tipo_producto.tpr_eliminado','=', TipoProducto::eliminado_false)                 
                ->get();
        
        
        
         return view('empresa', ['categorias' => $categorias]);        
    }
    
    
    public function homeCategorias()
    {        
        $categorias = DB::table('tipo_producto')
                ->where('tipo_producto.tpr_estado','=', TipoProducto::estado_activo)
                ->where('tipo_producto.tpr_eliminado','=', TipoProducto::eliminado_false)                 
                ->get();
     
         $Recurso = new Recurso();
        
         return view('categorias', ['categorias' => $categorias,'Recurso' => $Recurso] );            
    }
    
    
}
