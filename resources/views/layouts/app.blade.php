<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Devstragram @yield('titulo')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @stack('style')

        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <!-- Styles -->
        <script type="text/javascript" src="{{asset('js/app.js')}}" defer></script>


    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shawod">
            <div class="container mx-auto flex justify-between item-center">
            <a href="/"><h1 class="text-3xl font-black">DevStagram</h1></a>
            


           
            @guest

            <nav class="flex gap-2 item-center">

                <a class="font-bold upercase text-gray-600 text-sm" href="{{ route('login')}}">Login</a>

                <a class="font-bold upercase text-gray-600 text-sm" href="{{ route('register') }}">Crear cuenta</a>
            </nav>
            @endguest
            
             @auth

             <nav class="flex gap-2 item-center">
                <a href="{{ route('posts.create') }}"
                    class="flex item-center gap-2 bg-white border p-2 text-gray-600 rounded text-sm font-bold cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg> 
                Crear
                </a>

                <a href="{{ route('posts.index', auth()->user()->username) }}">Hola: {{ auth()->user()->username }}</a>
                <form  action="{{ route('logout') }}" method="post">
                    @csrf
                    <input class="font-bold upercase text-gray-600 text-sm" style="cursor: pointer;" value="Salir" type="submit">
                </form>
            </nav>
            @endauth
       
        </div>
        </header>


        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10 pb-5">@yield('titulo')</h2>

                @yield('contenido')
        </main>

        <footer class="text-center font-bold upercase">
            DevStagram - Todos los derechos reservados {{ now()->year }}
        </footer>

    </body>
</html>
