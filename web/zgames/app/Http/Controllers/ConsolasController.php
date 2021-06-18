<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Consola;

class ConsolasController extends Controller
{
    public function getMarcas(){
        //$marcas = ["Sony", "Microsoft", "Nintendo"]
        $marcas = array();
        $marcas[] = "Sony";
        $marcas[] = "Microsoft";
        $marcas[] = "Nintendo";

        return $marcas;
    }
    //Esta funcion va a ir a buscar todas las consolas que existen en la bd
    //Y las va a retornar
    public function getConsolas(){
        $consolas = Consola::all();
        return $consolas;
    }

    public function crearConsola(){
        $consola = new Consola();
        $consola->nombre = "Nintendo Switch";
        $consola->marca = "Nintendo";
        $consola->anio = 2015;

        $consola->save();
        return $consola;
    }
}
