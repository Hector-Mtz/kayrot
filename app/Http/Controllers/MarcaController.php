<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MarcaController extends Controller
{
    //
    public function index($marca_nombre)
    {
        $marcas = DB::connection('mysql2')->table('marca')->get();

        $marca = DB::connection('mysql2')->table('marca')
            ->where('marca.nombre', $marca_nombre)
            ->first();

        $productos = DB::connection('mysql2')->table('productos')
            ->where('productos.marca', $marca->idMarca)
            ->get();

        $categorias = DB::connection('mysql2')->table('categorias')
            ->join('productos', 'categorias.idCategorias', '=', 'productos.categorias')
            ->where('productos.marca', $marca->idMarca)
            ->select('categorias.*')
            ->distinct()
            ->get();

        return Inertia::render('Marcas/Index', [
            'marca' => $marca,
            'marcas' => $marcas,
            'productos' => $productos,
            'categorias' => $categorias
        ]);
    }
}
