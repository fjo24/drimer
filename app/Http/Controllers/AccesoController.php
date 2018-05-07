<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\User;
Use App\Acceso;

class AccesoController extends Controller
{

    public function accesos()
    {
        $accesos = Acceso::orderBy('date', 'ASC')->get();
        return view('usuarios/accesos', compact('accesos'));
    }

    public function acceso_incorrecto()
    {
        $accesos = Acceso::orderBy('date', 'ASC')->Where('status', 'incorrecto')->get();
        return view('usuarios/accesos', compact('accesos'));
    }

    public function acceso_correcto()
    {
        $accesos = Acceso::orderBy('date', 'ASC')->Where('status', 'correcto')->get();
        return view('usuarios/accesos', compact('accesos'));
    }

    public function correcto(Request $request, $email)
    {
        $carbon = new \Carbon\Carbon();
        $users = User::orderBy('name', 'DESC')->get();

        foreach ($users as $user) {
            if ($email==$user->email) {
                $acceso = new Acceso();
                $acceso->user_id = $user->id;
                $acceso->status = 'correcto';
                $acceso->ip = \Request::ip();
                $acceso->date = $carbon->now();
                $acceso->save();
            }
        }  
        return redirect()->route('home');
    }

    public function incorrecto(Request $request, $email)
    {
        $carbon = new \Carbon\Carbon();
        $users = User::orderBy('name', 'DESC')->get();

        foreach ($users as $user) {
            if ($email==$user->email) {
                $acceso = new Acceso();
                $acceso->user_id = $user->id;
                $acceso->status = 'incorrecto';
                $acceso->ip = \Request::ip();
                $acceso->date = $carbon->now();
                $acceso->save();
            }
        }

        return redirect()->route('login');
        
        
    }
}
