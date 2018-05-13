<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ingresoClienteController extends Controller
{
    public function homeIngreso()
    {
       
        return view('ingresoCliente'); 
        
    } 
}
