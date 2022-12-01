<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorDiario;

class controladorVistas extends Controller{
    public function showHome(){
        return view('Home');
    }

    public function showIngresar(){
        return view('Registrar');
    }

    public function showRecuerdos(){
        return view('Recuerdo');
    }

    public function showWelcome(){
        return view('welcome');
    }

    public function procesarRecuerdo(validadorDiario $requ){
        //return 'Su recuerdo está siendo procesado';
       //return $requ->all();
       //return $requ->path();
       //return $requ->url();
       //return $requ->ip();

       return redirect('Registrar')->with('Confirmación','Llegó correcto');

    }
}
