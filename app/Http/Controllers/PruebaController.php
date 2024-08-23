<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function ruta1()
    {
        return response()->json(["mensaje" => "primer mensaje desde mi controller"], 200);
    }

    public function ruta2(Request $request)
    {
        $id = $request->route('id');
        return response()->json(["mensaje" => "segundo mensaje desde mi controller: " . $id], 200);
    }
}
