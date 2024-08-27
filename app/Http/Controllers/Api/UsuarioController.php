<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    //
    public function obtenerUsuarios()
    {
        $datos = DB::table('usuarios')->get();
        return response()->json($datos, 200);
    }
    public function obtenerUsuario($id)
    {
        $data = DB::table('usuarios')->where('id', $id)->first();
        if ($data) {
            return response()->json($data, 200);
        } else {
            return response()->json(['message: ' => "usuario no encontrado"], 400);
        }
    }
}
