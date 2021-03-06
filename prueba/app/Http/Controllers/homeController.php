<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Recurso;
use Illuminate\Support\Facades\DB;
use App\Models\TipoProducto;
use App\Models\PromocionHome;
use App\Models\Destacado;

class homeController extends Controller

{
    //
    
    public function home(){
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
         //para realizar una quert
         $nuevosProductos = DB::table('producto')
                 ->join('recurso','producto.pro_id','=','recurso.pro_id')
                 ->join('tipo_producto','tipo_producto.tpr_id','=','producto.tpr_id')    
                 ->where('producto.pro_estado','=', TipoProducto::estado_activo)
                 ->where('producto.pro_eliminado','=', TipoProducto::eliminado_false)  
                 ->where('recurso.rec_es_principal','=', Recurso::es_principal)   
                 ->orderBy('producto.pro_id', 'DESC')

                 ->take(6)->get();
     
         $Recurso = new Recurso();
         
         $categorias = DB::table('tipo_producto')
                ->where('tipo_producto.tpr_estado','=', TipoProducto::estado_activo)
                ->where('tipo_producto.tpr_eliminado','=', TipoProducto::eliminado_false)                 
                ->get();
          
           $destacados = DB::table('destacados')
                 ->join('producto','producto.pro_id','=','destacados.pro_id')
                 ->join('recurso','recurso.pro_id','=','producto.pro_id')   
                 ->where('destacados.des_estado','=', TipoProducto::estado_activo)
                 ->where('destacados.des_eliminado','=', TipoProducto::eliminado_false) 
                 ->where('recurso.rec_es_principal','=', Recurso::es_principal)                
                 ->get();


          
        // dd($promocion_home1);
         
       // select * from promocion_home h inner join producto p on h.prh_prod_id_2 = p.pro_id inner join recurso r on r.pro_id = p.pro_id
       // where h.prh_estado = 0
         
         
         
    //SELECT * FROM producto inner join recurso on producto.pro_id = recurso.pro_id 
    //inner join tipo_producto on tipo_producto.tpr_id = producto.tpr_id
         
        // $nuevosProductos = Recurso::find($pene);
        // dd($nuevosProductos);
        
         return view('welcome', ['nuevosProductos' => $nuevosProductos,'Recurso' => $Recurso, 'categorias' =>  $categorias,
        
             'destacados' => $destacados,
             ] );        
        $this->middleware('auth');
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    }
    
    
}