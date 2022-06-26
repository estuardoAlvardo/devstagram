@extends('layouts.app')

@section('titulo')
Registrate en DevStagram
@endsection


@section('contenido')

<section class="py-26 bg-gray-100">
  <div class="container px-4 mx-auto">
    <div class="max-w-lg mx-auto">
      <div class="text-left mb-8">
          <img class="rounded-md" src="{{asset('img/registrar.jpg')}}" alt="Imagen registro usuarios">
      

      <form action="{{ route('register') }}" method="post" novalidate>
      	@csrf
        <div class="mb-6">
          <label class="block mb-2 font-extrabold" for="">Nombre</label>
          <input class="inline-block w-full p-4 leading-6 text-lg font-extrabold placeholder-indigo-900 bg-white shadow border-2 border-indigo-900 rounded @error('name') border-red-500 @enderror" type="text" placeholder="Nombre" name="name" value="{{ old('name') }}"  >
          @error('name')
          	<p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">{{ $message }}</p>
          @enderror

        </div>


        <div class="mb-6">
          <label class="block mb-2 font-extrabold" for="">Usuario</label>
          <input class="inline-block w-full p-4 leading-6 text-lg font-extrabold placeholder-indigo-900 bg-white shadow border-2 border-indigo-900 rounded @error('username') border-red-500 @enderror" type="text" placeholder="Usuario" name="username" value="{{ old('username') }}">

          @error('username')
          	<p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label class="block mb-2 font-extrabold" for="">Email</label>
          <input class="inline-block w-full p-4 leading-6 text-lg font-extrabold placeholder-indigo-900 bg-white shadow border-2 border-indigo-900 rounded @error('email') border-red-500 @enderror" type="email" name="email" placeholder="email" value="{{ old('email') }}">

          @error('email')
          	<p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label class="block mb-2 font-extrabold" for="">Password</label>
          <input class="inline-block w-full p-4 leading-6 text-lg font-extrabold placeholder-indigo-900 bg-white shadow border-2 border-indigo-900 rounded @error('email') border-red-500 @enderror" type="password" placeholder="**********" name="password" value="{{ old('password') }}">
         @error('password')
          	<p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">{{ $message }}</p>
          @enderror
        </div>
         <div class="mb-6">
          <label class="block mb-2 font-extrabold" for="">Confirmar</label>
          <input class="inline-block w-full p-4 leading-6 text-lg font-extrabold placeholder-indigo-900 bg-white shadow border-2 border-indigo-900 rounded" type="password" placeholder="Confirma tu password" id="password_confirmation" name="password_confirmation">
        </div>

        <input type="submit" class="inline-block w-full py-4 px-6 mb-6 text-center text-lg leading-6 text-white font-extrabold bg-indigo-800 hover:bg-indigo-900 border-3 border-indigo-900 shadow rounded transition duration-200 cursor-pointer" value="Registrarme">
        <p class="text-center font-extrabold">Ya tengo cuenta <a class="text-red-500 hover:underline" href="{{ route('login') }}">Entrar</a></p>
      </form>
    </div>
  </div>
</section>
@endsection