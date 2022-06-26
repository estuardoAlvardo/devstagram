<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class LoginController extends Controller
{
    //

	public function index(){
    //dd('desde login');
		return view('auth.login');
    }


    public function store(Request $request){

    	//validacion
    	$this->validate($request, [
    		"email" => "required|email",
    		"password" => "required"
    	]);

    	//busqueda

     if(auth()->attempt($request->only('email','password'), $request->remember)){
     	  
          return redirect()->route('posts.index',auth()->user()->username);
     	  
     }else{

     	return  back()->with('mensaje', 'Usuario y/o contraseña incorrectas.');
     }

   	 }

    
}
