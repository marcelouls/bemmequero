<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnamnesePsiController extends Controller
{
    public function add(Request $request)
   {

    $paciente = $request->('pacientes')






       $product = $request->get('product');

       
       flash('Paciente adicionado no carrinho')->success();
       return redirect()->route('product.single', ]);
   }
}
