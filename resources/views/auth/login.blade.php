@extends('layouts.app')

@section('titulo')
Ingresa a tu cuenta
@endsection


@section('contenido')

<section class="py-26 bg-gray-100">
  <div class="container px-4 mx-auto">
    <div class="max-w-lg mx-auto">
      <div class="text-left mb-8">
          <img class="rounded-md" src="{{asset('img/login.jpg')}}" alt="Imagen registro usuarios">
      

      <form action="{{ route('login') }}" method="post" novalidate>
      	@csrf

          @if(session('mensaje'))
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }}</p>
          @endif
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

        <div class="flex flex-wrap -mx-4 mb-6 items-center justify-between">
          <div class="w-full lg:w-auto px-4 mb-4 lg:mb-0">
            <label for="">
              <input type="checkbox" name="remember">
              <span class="ml-1 font-extrabold">No cerrar sesión</span>
            </label>
          </div>
          <div class="w-full lg:w-auto px-4"><a class="inline-block font-extrabold hover:underline" href="#">No recuerdo la contraseña?</a></div>
        </div>

        
        <input type="submit" class="inline-block w-full py-4 px-6 mb-6 text-center text-lg leading-6 text-white font-extrabold bg-indigo-800 hover:bg-indigo-900 border-3 border-indigo-900 shadow rounded transition duration-200 cursor-pointer" value="Ingresar ahora">
        <p class="text-center font-extrabold">No tengo cuenta <a class="text-red-500 hover:underline" href="{{ route('register') }}">Registrar</a></p>
      </form>
    </div>
  </div>
</section>
@endsection