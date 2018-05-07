<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\User;
Use App\Acceso;

class UsuarioController extends Controller
{
    
    public function index()
    {
    	$accesos = Acceso::orderBy('date', 'ASC')->get();
        return view('usuarios/usuarios', compact('accesos'));
    }

    public function create(){
    //carga el formulario para agregar un nuevo usuario
    
    return view("usuarios.create");

	}

    public function store(Request $request){

    $accesos = Acceso::orderBy('date', 'ASC')->get();
	$usuario=new User;
	$usuario->name=$request->input("name");
	$usuario->email=$request->input("email");
	$usuario->password= bcrypt( $request->input("password") );
	$usuario->save();
	return view('usuarios/usuarios', compact('accesos'));

	}

    public function acceso_incorrecto()
    {
        $accesos = Acceso::orderBy('date', 'ASC')->Where('status', 'incorrecto')->get();
        return view('accesos', compact('accesos'));
    }

	public function lista()
    {
        $users = User::orderBy('name', 'ASC')->get();
        return view('usuarios/list', compact('users'));
    }

    public function edit($id)
    {

    $user = User::find($id);
	return view('usuarios/edit', compact('user'));
    }

    public function update(Request $request, $id){

    $accesos = Acceso::orderBy('date', 'ASC')->get();
    $usuario = User::find($id);
    $usuario->fill($request->all());
	$usuario->save();
	return view('usuarios/usuarios', compact('accesos'));

	}

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        //flash('El usuario '. $user->name. ' '. $user->last_name.' ha sido eliminado con exito!!', 'danger')->important();
        return redirect()->route('list');
    }
}
