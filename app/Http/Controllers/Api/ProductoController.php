<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ProductoController extends Controller
{
    //
    public function obtenerProductos()
    {
        $data = DB::table('productos')->get();
        return response()->json($data, 200);
    }
    public function obtenerProducto($id)
    {
        $data = DB::table('productos')->where('id', $id);
        if ($data) {
            return response()->json($data, 200);
        } else {
            return response()->json(['message:' => 'producto no encontrado'], 401);
        }
    }

    /* esta funcion hace lo mismo que la anterior esta buscando el id en especifico pero esta esta enfocada a propieamente buscar por id
     */
    public function obtenerProductoFind($id)
    {
        $data = DB::table('productos')->find($id);
        return response()->json($data, 200);
    }
}
