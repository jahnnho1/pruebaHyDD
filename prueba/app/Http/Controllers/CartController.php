<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CartController extends Controller
{

	public function _construct(){
		if(!\Session::has('cart')) \Session::put('cart',array());
	}



    // Show cart
	public function show()
	{
        $cart =  \Session::get('cart');
        dd($cart);
		 
		return \Session::get('cart');
	}


    // Add item

    public function add($proId){

        $producto = Producto::where('producto.pro_estado','=',producto::estado_activo)
                ->where('producto.pro_eliminado','=',producto::eliminado_false)
                ->find($proId);

        if($producto == null){
                $data['errorMessage'] = 'El producto que quiere registrar no esta disponible.';
                return redirect()->action('CartController@show', $data); 
        }



    	$cart =  \Session::get('cart');
    	$cart[$producto->pro_id] = $producto;
        \Session::put('cart',$cart);
       // dd($cart);

        return redirect()->action('CartController@show'); 
    }


    // Delete item

    // Update item


    // Trash cart



    // Total
}
