<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Intervention\Image\Facades\Image; 

class ImagenController extends Controller
{
    //

    public function store(Request $request){

    	$imagen = $request->file('file'); //imagen precargada

    	$nombreImagen = Str::uuid().'.'.$imagen->extension();

    	$imagenServidor = Image::make($imagen); //subir imagen al servidor mediante interventionImage 

    	$imagenServidor->fit(1000,1000); //recortamos a la imagen de manera cuadrada

    	$imagenPath = public_path('uploads').'/'.$nombreImagen; //mover la imagen al servidor es necesario crear el path manualmente

    	$imagenServidor->save($imagenPath);  //guardamos la ruta 

    	return response()->json(['imagen' => $nombreImagen ]);

    }
}
