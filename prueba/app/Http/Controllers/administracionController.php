<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Recurso;
use App\Models\TipoProducto;
use App\Models\PromocionHome;
use App\Models\Destacado;
use Illuminate\Support\Facades\DB;

class administracionController extends Controller
{
    public function homeAdministracion()
    {   
        return view('Administracion.backend.home.index'); 
    }  
    
    
    public function homeProducto()
    {   
         $Productos = DB::table('producto')                 
                 ->join('tipo_producto','tipo_producto.tpr_id','=','producto.tpr_id')               
                 ->get();
     
         
        //SELECT * FROM producto inner join recurso on producto.pro_id = recurso.pro_id 
        //inner join tipo_producto on tipo_producto.tpr_id = producto.tpr_id
         
        // $nuevosProductos = Recurso::find($pene);
        // dd($nuevosProductos);
        
         return view('Administracion.backend.Producto.index', ['Productos' => $Productos,] );  
    }      
    
    
    public function homeCategoria()
    {   
         $Categorias = DB::table('tipo_producto')                 
                 ->where('tipo_producto.tpr_eliminado','=',TipoProducto::eliminado_false)               
                 ->paginate(10);
         
       //  dd($Categorias);
         
        //SELECT * FROM producto inner join recurso on producto.pro_id = recurso.pro_id 
        //inner join tipo_producto on tipo_producto.tpr_id = producto.tpr_id
         
        // $nuevosProductos = Recurso::find($pene);
        // dd($nuevosProductos);
        
         return view('Administracion.backend.Categoria.index', ['Categorias' => $Categorias,] );  
    }
    
    
        public function homePageAdministracion()
    {   
        $promociones = DB::table('promocion_home')  
            ->where('promocion_home.prh_eliminado','=', PromocionHome::eliminado_false)
            ->paginate(10);
        
        $producto = new Producto();
        
        
        $destacados = DB::table('destacados')  
            ->where('destacados.des_eliminado','=', Destacado::eliminado_false)
            ->paginate(10);
         
         //dd($promocion);
         
        //SELECT * FROM producto inner join recurso on producto.pro_id = recurso.pro_id 
        //inner join tipo_producto on tipo_producto.tpr_id = producto.tpr_id
         
        // $nuevosProductos = Recurso::find($pene);
        // dd($nuevosProductos);
         return view('Administracion.backend.homeAdministracion.index', ['promociones' => $promociones,'producto' => $producto, 'destacados' => $destacados ] );  
         
  
    }
    
    
    
    
    
    
    
}
