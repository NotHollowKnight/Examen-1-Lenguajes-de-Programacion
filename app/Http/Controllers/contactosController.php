<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class contactosController extends Controller
{
    public function añadir($codigoEntrada){
        return view('agregarContacto', compact('codigoEntrada'));
    }

    public function añadirContacto(Request $request, $codigoEntrada){
        $contacto = new Contacto();
        $contacto->nombre = $request->nombre;
        $contacto->apellido = $request->apellido;
        $contacto->telefono = $request->telefono;
        $contacto->codigoEntrada = $codigoEntrada;
        $contacto->save();
        return redirect('/directorio/mostrar');
    }

}
