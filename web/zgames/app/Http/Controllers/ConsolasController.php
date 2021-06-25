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

    public function crearConsola(Request $request){
        $input = $request->all(); //Genera un arreglo ccon
        //todo lo que mando la interfaz(Es decir, javascript)
        $consola = new Consola();
        $consola->nombre = $input["nombre"];
        $consola->marca = $input["marca"];
        $consola->anio = $input["anio"];

        $consola->save();
        return $consola;
    }
}
