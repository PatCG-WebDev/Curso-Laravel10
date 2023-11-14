<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view("contactanos.index");
    }

    public function store(Request $request){

        $this->validate($request, [
            'name'=> 'required',
            'email'=> 'required|email',
            'mensaje'=>'required'
        ]);

        Mail::to('patricia@gmail.com')->send(new ContactanosMailable($request->all()));

        session()->flash('info','Mensaje enviado'); /* Estamos creando una variable de sesión flash, que lo que hará es mostrarlos el mensaje indicado en el 2º parámetro. Tenemos que indicar en el formulario, que cuando el mensaje haya sido enviado con éxito salte esta variabel flash con el mensaje indicado.*/

        /* podemos hacerlo con la variable session, o utilizando el método with  en el return:
        
        return redirect()->route('contactanos.index')
            ->with('info', 'Mensaje enviado');
        
        */

        return redirect()->route('contactanos.index');
    }
}
