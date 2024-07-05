<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;
use App\Models\Contacto;

class directorioController extends Controller
{
    public function mostrar(){
        $directorio = Directorio::all();
        return view('directorio', compact('directorio'));
    }

    public function crear(){
        return view('crearEntrada');
    }

    public function crearEntrada(Request $request){
        $directorio = new Directorio();
        $directorio->codigoEntrada = $request->codigo;
        $directorio->nombre = $request->nombre;
        $directorio->apellido = $request->apellido;
        $directorio->correo = $request->correo;
        $directorio->telefono = $request->telefono;
        $directorio->save();

        return redirect('/directorio/mostrar');
    }

    public function buscar(){
        return view('buscar');
    }

    public function buscarEntrada(Request $request){
        $directorio = Directorio::where('correo', $request->correo)->first();
        if($directorio === null){
            return view('directorio.mostrar');
        }else{
            return redirect('/directorio/verContactos', $directorio->codigoEntrada);
        }
        
    }

    public function verContactos($codigoEntrada){
        $directorio = Directorio::find($codigoEntrada);
        $contacto = Contacto::all();
        return view('verContactos', compact('contacto', 'directorio'));
    }

    public function eliminar(){
        return view('eliminar');
    }

}
