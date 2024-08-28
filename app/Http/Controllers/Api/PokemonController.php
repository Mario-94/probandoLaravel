<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get('https://pokeapi.co/api/v2/abilitys');


        // Verifica si la solicitud resultó en un 404 Not Found
        if ($response->notFound()) {
            // Devuelve un mensaje de error con un código de estado 404
            return response()->json(["message" => $response->forbidden()]);
        } else {
            // Si no hubo un error 404, devuelve el contenido con un código de estado 200 (OK)
            return response()->json($response->json(), 200);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
