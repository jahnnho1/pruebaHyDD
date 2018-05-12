<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
         $nuevosProductos = [
         ['id' => 1, 'content' => 'Este es mi primer mensaje', 'imagen' => 'http://placeimg.com/640/480?1'],
         ['id' => 2, 'content' => 'Este es mi primer mensaje', 'imagen' => 'http://placeimg.com/640/480?2'],
         ['id' => 3, 'content' => 'Este es mi primer mensaje', 'imagen' => 'http://placeimg.com/640/480?3'],
         ['id' => 4, 'content' => 'Este es mi primer mensaje', 'imagen' => 'http://placeimg.com/640/480?4']
             
         ];
        
        
        
         return view('welcome', ['nuevosProductos' => $nuevosProductos,] );        
    }
    

}
