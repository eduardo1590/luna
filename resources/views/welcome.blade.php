<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Luna Carlota</title>
        <!-- Favicon -->
        <link rel="icon" href="https://res.cloudinary.com/duvvbgjo4/image/upload/v1617214090/favicon_j7h5zc.ico" type="image/x-icon">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
            */
        </style>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>
    <body class="antialiased">
      <!--  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> -->
        <!-- This example requires Tailwind CSS v2.0+ -->
<div id="hero" class="relative bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto">
    <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
      <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
        <polygon points="50,0 100,0 50,100 0,100" />
      </svg>

      <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
          <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
            <div class="flex items-center justify-between w-full md:w-auto">
              <a href="#">
                <span class="sr-only">Luna</span>
                <img class="h-8 w-auto sm:h-10" src="https://res.cloudinary.com/duvvbgjo4/image/upload/v1617213715/13F78891-70FE-404D-8AB6-BB98FDE58F00_tzb89f.png">
              </a>
              <div class="-mr-2 flex items-center md:hidden">
                <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-500" id="main-menu" aria-haspopup="true">
                  <span class="sr-only">Open main menu</span>
                  <!-- Heroicon name: menu -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
            <a href="#chart" class="font-medium text-gray-500 hover:text-gray-900">Evolucion</a>

            <a href="#puppies" class="font-medium text-gray-500 hover:text-gray-900">Mis Cachorros</a>

            @auth 
                <a href="{{ url('/inicio') }}" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                Mi Billetera
                </a>
            @else
            <a href="{{ route('login') }}" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
            Iniciar sesión
            </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-yellow-400 hover:bg-yellow-500">
                    Registrarse
                    </a>
                @endif
            @endauth

            
          </div>
        </nav>
      </div>

      <!--
        Mobile menu, show/hide based on menu open state.

        Entering: "duration-150 ease-out"
          From: "opacity-0 scale-95"
          To: "opacity-100 scale-100"
        Leaving: "duration-100 ease-in"
          From: "opacity-100 scale-100"
          To: "opacity-0 scale-95"
      -->
      <div x-data="{ open: false }" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
        <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
          <div class="px-5 pt-4 flex items-center justify-between">
            <div>
              <img class="h-8 w-auto" src="https://res.cloudinary.com/duvvbgjo4/image/upload/v1617213715/13F78891-70FE-404D-8AB6-BB98FDE58F00_tzb89f.png" alt="">
            </div>
            <div class="-mr-2">
              <button @click="open = ! open" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-500">
                <span class="sr-only">Cerrar menú</span>
                <!-- Heroicon name: x -->
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
              </button>
            </div>
          </div>
          <div :class="{'block': open, 'hidden': ! open}" role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
            <div class="px-2 pt-2 pb-3 space-y-1" role="none">
              <a href="#chart" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" role="menuitem">Evolucion</a>

              <a href="#puppies" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" role="menuitem">Mis Cachorros</a>
            </div>
            <div role="none">
              <a href="{{ route('login') }}" class="block w-full px-5 py-3 text-center font-medium text-yellow-600 bg-gray-50 hover:bg-gray-100" role="menuitem">
                Iniciar sesión
              </a>
            </div>
          </div>
        </div>
      </div>

      <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center lg:text-left">
          <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
            <span class="block text-yellow-500 xl:inline">LUNA CARLOTA</span>
            <span class="block xl:inline">Presenta</span>
          </h1>
          <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
           Cachorros Golden Retriever muy Sexys
          </p>
        </div>
      </main>
    </div>
  </div>
  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://res.cloudinary.com/duvvbgjo4/image/upload/v1617136924/WhatsApp_Image_2021-03-30_at_4.33.45_PM_bodraq.jpg" alt="">
  </div>
</div>
<div id="chart" class="py-12 bg-gray-900">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="lg:text-center">
      <h2 class="text-base text-yellow-600 font-semibold tracking-wide uppercase">Seguro y privado</h2>
      <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-300 sm:text-4xl">
        Recibe y envia dinero de manera sencilla y confiable
      </p>
      <p class="mt-4 max-w-2xl text-xl text-gray-200 lg:mx-auto">
        Intercambia las criptomonedas mas confiables en pocos pasos, sin preocuparte por exponer datos sencibles.
      </p>
    </div>

    <div class="mt-10">
      <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
        <div class="flex">
          <div class="flex-shrink-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-yellow-500 text-white">
              <!-- Heroicon name: globe-alt -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
              </svg>
            </div>
          </div>
          <div class="ml-4">
            <dt class="text-lg leading-6 font-medium text-gray-300">
              Sin fronteras
            </dt>
            <dd class="mt-2 text-base text-gray-200">
              Recibe y envia criptomonedas desde y hacia cualquier lugar del mundo.
            </dd>
          </div>
        </div>

        <div class="flex">
          <div class="flex-shrink-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-yellow-500 text-white">
              <!-- Heroicon name: scale -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
              </svg>
            </div>
          </div>
          <div class="ml-4">
            <dt class="text-lg leading-6 font-medium text-gray-300">
              Sin comisiones
            </dt>
            <dd class="mt-2 text-base text-gray-200">
              No cobramos comisiones adicionales por cualquiera de tus movimientos.
            </dd>
          </div>
        </div>

        <div class="flex">
          <div class="flex-shrink-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-yellow-500 text-white">
              <!-- Heroicon name: lightning-bolt -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
          </div>
          <div class="ml-4">
            <dt class="text-lg leading-6 font-medium text-gray-300">
              Billeteras instantaneas
            </dt>
            <dd class="mt-2 text-base text-gray-200">
              Sin necesidad de verificar identidad, solo necesitas crear tu cuenta para comenzar a realizar transacciones.
            </dd>
          </div>
        </div>

        <div class="flex">
          <div class="flex-shrink-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-yellow-500 text-white">
              <!-- Heroicon name: annotation -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
              </svg>
            </div>
          </div>
          <div class="ml-4">
            <dt class="text-lg leading-6 font-medium text-gray-300">
              Verificacion en dos pasos
            </dt>
            <dd class="mt-2 text-base text-gray-200">
              Agrega seguridad a tu billetera para garantizar, que solo tu, tienes acceso a ella.
            </dd>
          </div>
        </div>
      </dl>
    </div>
  </div>
</div>

<div id="puppies" class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      <span class="relative inline-block">
        <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
          <defs>
            <pattern id="903f4a9e-7ac3-441c-9613-04c15fcc0a14" x="0" y="0" width=".135" height=".30">
              <circle cx="1" cy="1" r=".7"></circle>
            </pattern>
          </defs>
          <rect fill="url(#903f4a9e-7ac3-441c-9613-04c15fcc0a14)" width="52" height="24"></rect>
        </svg>
        <span class="relative">Tengo</span>
      </span>
      8 cachorros 
    </h2>
    <p class="text-base text-gray-700 md:text-lg">
      No paran de comer y crecen dia a dia bajo estricta vigilancia
    </p>
  </div>
  <div class="grid grid-cols-2 gap-5 row-gap-6 mb-10 sm:grid-cols-3 lg:grid-cols-4">
    <div class="text-center">
      <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-green-500 sm:w-24 sm:h-24">
        <img src="" alt="">
      </div>
      <h6 class="mb-2 font-semibold leading-5">PRU</h6>
    </div>
    <div class="text-center">
      <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-red-300 sm:w-24 sm:h-24">
        <img src="" alt="">
      </div>
      <h6 class="mb-2 font-semibold leading-5">LUCKY</h6>
    </div>
    <div class="text-center">
      <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-yellow-600 sm:w-24 sm:h-24">
        <img src="" alt="">
      </div>
      <h6 class="mb-2 font-semibold leading-5">SPIRIT</h6>
    </div>
    <div class="text-center">
      <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-indigo-900 sm:w-24 sm:h-24">
        <img src="" alt="">
      </div>
      <h6 class="mb-2 font-semibold leading-5">CHICA LINDA</h6>
    </div>
    <div class="text-center">
      <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-blue-500 sm:w-24 sm:h-24">
        <img src="" alt="">
      </div>
      <h6 class="mb-2 font-semibold leading-5">ABIGAIL</h6>
    </div>
    <div class="text-center">
      <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-yellow-300 sm:w-24 sm:h-24">
        <img src="" alt="">
      </div>
      <h6 class="mb-2 font-semibold leading-5">MISTERIO</h6>
    </div>
    <div class="text-center">
      <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-pink-600 sm:w-24 sm:h-24">
        <img src="" alt="">
      </div>
      <h6 class="mb-2 font-semibold leading-5">JUNIPERO</h6>
    </div>
    <div class="text-center">
      <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-gray-500 sm:w-24 sm:h-24">
        <img src="" alt="">
      </div>
      <h6 class="mb-2 font-semibold leading-5">TUSO</h6>
    </div>
  </div>
</div>

<div class="relative mt-16 bg-gray-900">
  <svg class="absolute top-0 w-full h-6 -mt-5 sm:-mt-10 sm:h-16 text-gray-900" preserveAspectRatio="none" viewBox="0 0 1440 54">
    <path fill="currentColor" d="M0 22L120 16.7C240 11 480 1.00001 720 0.700012C960 1.00001 1200 11 1320 16.7L1440 22V54H1320C1200 54 960 54 720 54C480 54 240 54 120 54H0V22Z"></path>
  </svg>
  <div class="px-4 pt-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6">
      <div class="md:max-w-md lg:col-span-2">
        <a href="#hero" aria-label="Go home" title="Company" class="inline-flex items-center">
        <img class="h-8 w-auto sm:h-10" src="https://res.cloudinary.com/duvvbgjo4/image/upload/v1617213715/13F78891-70FE-404D-8AB6-BB98FDE58F00_tzb89f.png">
          <span class="ml-2 text-xl font-bold tracking-wide text-gray-100 uppercase">Luna Carlota</span>
        </a>
        <div class="mt-4 lg:max-w-sm">
          <p class="text-sm text-gray-200">
            Mis cachorros estaran disponibles en 2 meses
          </p>
          <p class="mt-4 text-sm text-gray-200">
            Llena tu hogar de alegria
          </p>
        </div>
      </div>
      <div class="grid md:grid-cols-4 gap-5 row-gap-8 lg:col-span-4">
        <div class="lg:col-start-3">
          <p class="font-semibold tracking-wide text-yellow-500">
            Información
          </p>
          <ul class="mt-2 space-y-2">
            <li>
              <a href="/" class="transition-colors duration-300 text-gray-200 hover:text-yellow-500">Contactanos</a>
            </li>
           <!-- <li>
              <a href="#" class="transition-colors duration-300 text-gray-200 hover:text-yellow-500">Ayuda</a>
            </li>
            <li>
              <a href="#" class="transition-colors duration-300 text-gray-200 hover:text-yellow-500">Términos de servicio</a>
            </li>
            <li>
              <a href="#" class="transition-colors duration-300 text-gray-200 hover:text-yellow-500">Política de privacidad</a>
            </li>-->
          </ul>
        </div>
        <!--<div>
          <p class="font-semibold tracking-wide text-yellow-500">Activos</p>
          <ul class="mt-2 space-y-2">
            <li>
              <a href="#" class="transition-colors duration-300 text-gray-200 hover:text-yellow-500">Bitcoin</a>
            </li>
            <li>
              <a href="#" class="transition-colors duration-300 text-gray-200 hover:text-yellow-500">Ethereum</a>
            </li>
            <li>
              <a href="#" class="transition-colors duration-300 text-gray-200 hover:text-yellow-500">Dash</a>
            </li>
            <li>
              <a href="#" class="transition-colors duration-300 text-gray-200 hover:text-yellow-500">Bitcoin Cash</a>
            </li>
            <li>
              <a href="#" class="transition-colors duration-300 text-gray-200 hover:text-yellow-500">Tether</a>
            </li>
          </ul>
        </div>-->
      </div>
    </div>
    <div class="flex flex-col justify-between pt-5 pb-10 border-t border-yellow-400 sm:flex-row">
      <p class="text-sm text-gray-100">
        © Copyright 2021 Doremi. Todos los derechos reservados.
      </p>
    </div>
  </div>
</div>
</body>
</html>