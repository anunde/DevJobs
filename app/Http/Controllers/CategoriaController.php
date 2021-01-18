<?php

namespace App\Http\Controllers;

use App\Vacante;
use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function show(Categoria $categoria) {
        $vacantes = Vacante::where('categoria_id', $categoria->id)->where('activa', true)->paginate(10);

        return view('categorias.show')->with('vacantes', $vacantes)->with('categoria', $categoria);
    }
}
