<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Recurso;
use Illuminate\Support\Facades\DB;

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
     
         
    //SELECT * FROM producto inner join recurso on producto.pro_id = recurso.pro_id 
    //inner join tipo_producto on tipo_producto.tpr_id = producto.tpr_id
         
        // $nuevosProductos = Recurso::find($pene);
        // dd($nuevosProductos);
        
         return view('welcome', ['nuevosProductos' => $nuevosProductos,] );        
    }
    
    
}
