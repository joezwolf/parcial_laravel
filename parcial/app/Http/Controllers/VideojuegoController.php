<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videojuego;
use App\Http\Requests\StoreVideojuegoRequest;

class VideojuegoController extends Controller
{
    public function index()
    {
        return Videojuego::all();
    }

    public function store(StoreVideojuegoRequest $request)
    {
        $videojuego = Videojuego::create($request->validated());
        return response()->json($videojuego, 201);
    }


    public function show($id)
    {
        $videojuego = Videojuego::with('category')->findOrFail($id);
        return response()->json($videojuego);
    }
    

    public function update(StoreVideojuegoRequest $request, $id)
    {
        $videojuego = Videojuego::findOrFail($id);
        $videojuego->update($request->validated());

        return response()->json($videojuego);
    }

    public function destroy($id)
    {
        $videojuego = Videojuego::findOrFail($id);
        $videojuego->delete();

        return response()->json(null, 204);
    }
}
