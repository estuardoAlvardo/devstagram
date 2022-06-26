@extends('layouts.app')

@section('titulo')
	Crear una nueva publicación
@endsection



@section('contenido')

@push('style')

<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

@endpush

<div class="md:flex md:item-center m mb-20 p-10 bg-white shadow-xl border-5">
	<div class="md:-5/12 px-10"></div>
	<div class="md:w-3/12 px-10 ">
		
		<form  action="{{ route('imagenes.store') }}" method="post" enctype="multiple/form-data" id="dropzone" class="dropzone border-dashed  border-2 w-full h-96 rounded flex flex-col justify-center item-center">
			@csrf
		</form>
       
	</div>
	<form method="post" action="">
     <div class="md:w-12/12 px-10">
		 <label class="block mb-2 font-extrabold" for="">Título</label>
          <input class="inline-block w-full p-4 leading-6 text-lg font-extrabold placeholder-indigo-900 bg-white shadow border-2 border-indigo-900 rounded @error('titulo') border-red-500 @enderror" type="text" name="titulo" placeholder="Título" value="{{ old('titulo') }}">
          <label class="block mb-2 font-extrabold" for="">Descripción</label>
          <textarea class="inline-block w-full p-4 leading-6 text-lg font-extrabold placeholder-indigo-900 bg-white shadow border-2 border-indigo-900 rounded @error('descripcion') border-red-500 @enderror" type="text" name="descripcion" placeholder="Descripción" >{{ old('descripcion') }}</textarea>
     
       <input type="submit" class="inline-block w-full py-4 px-6 mb-6 text-center text-lg leading-6 text-white font-extrabold bg-indigo-800 hover:bg-indigo-900 border-3 border-indigo-900 shadow rounded transition duration-200 cursor-pointer" value="Crear publicación">

   </form>
	</div>


	
</div>
@endSection