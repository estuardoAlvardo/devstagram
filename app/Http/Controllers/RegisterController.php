<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; //facade ecript
use Illuminate\Support\Str; // facade para convertir un string en url manejo de sesiones

use App\Models\User;

class RegisterController extends Controller
{
    //


	public function index() 
	{
    return view('auth.register');
    }



    public function store(Request $request){

    	//ver las variables enviadas reques
    	//validaciones

        $request->request->add([
            'username' => Str::slug( $request->username )
        ]);


    	$this->validate($request,[
    		"name" => "required|max:30",
    		"username" => "required|unique:users|min:3|max:30",
    		"email" => "required|unique:users|email|max:60",
    		"password" => "required|confirmed|min:6"
    		
    	]);

    	

     User::create([
        "name" => $request->name,
        "username" => $request->username, 
        "email" => $request->email,
        "password" => Hash::make( $request->password )
    ]);


     //funcion para autenticar usuario y cargar variables de sesion que aqui se llama atributos
        /*
             auth()->attempt([
                'email' => $request->email,
                'password' => $request->password
             ]);
        */
     //otra forma de autenticar

     auth()->attempt($request->only('email','password'));

     return redirect()->route('posts.index');

    }



    





}
