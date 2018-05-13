<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Recurso;
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
    
    

    
    
    
    
    
    
    
}
