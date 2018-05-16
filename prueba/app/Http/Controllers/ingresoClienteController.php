<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoProducto;
use Illuminate\Support\Facades\DB;

class ingresoClienteController extends Controller
{
    public function homeIngreso()
    {
                 $categorias = DB::table('tipo_producto')
                ->where('tipo_producto.tpr_estado','=', TipoProducto::estado_activo)
                ->where('tipo_producto.tpr_eliminado','=', TipoProducto::eliminado_false)                 
                ->get();
        return view('ingresoCliente',['categorias' => $categorias]); 
        
    } 
}
