<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>FES | URS Binangonan Campus</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Pacifico&display=swap" rel="stylesheet" />
</head>

<body class="antialiased bg-bottom bg-no-repeat bg-cover bg-sideview backdrop-blur-xl">
    <section class="flex flex-col justify-between min-h-screen px-4 bg-gradient-to-r from-blue-900 to-blue-500/5 lg:px-32">
        <div>
            @if (Route::has('login'))
            <nav class="flex items-center justify-between py-2">
                <div class="flex flex-wrap items-center justify-center gap-4">
                    <img class="w-auto h-16" src="../assets/images/seal.png" alt="urs_logo">
                    <div class="text-white font-noto">
                        <div class="text-xl text-center">University of Rizal System</div>
                        <p class="text-sm italic sm:tracking-widest">"Nurturing Tomorrow's Noblest"</p>
                    </div>
                </div>
                @auth
                <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                @else
                <!-- <a href="{{ route('login') }}" class="relative hidden px-8 py-2 text-center transition-all duration-500 lg:block before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-zinc-400 before:transition-all before:duration-300 before:opacity-10 before:hover:opacity-0 before:hover:scale-50 after:absolute after:top-0 after:left-0 after:w-full after:h-full after:opacity-0 after:transition-all after:duration-300 after:border after:border-white/50 after:scale-125 after:hover:opacity-100 after:hover:scale-100">
                    <span class="relative font-thin text-white">Log in</span>
                </a> -->
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
                @endauth
            </nav>
            @endif
            <section class="pt-16 text-gray-600">
                <div class="container flex flex-col items-center px-5 py-24 mx-auto md:flex-row">
                    <div class="flex flex-col items-center mb-16 text-center lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:items-start md:text-left md:mb-0">
                        <h1 class="mb-4 font-serif text-3xl font-bold text-white sm:text-6xl">Faculty Evaluation System
                            <br class="hidden lg:inline-block">Binangonan Campus
                        </h1>
                        <p class="mb-8 text-2xl italic leading-relaxed text-white font-noto">
                            Enhancing Educational Excellence: Empowering Binangonan Campus through Faculty Evaluation
                        </p>
                        <div class="flex justify-center">
                            <a href="{{ route('login') }}" class="relative px-8 py-2 text-center transition-all duration-500 before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-zinc-400 before:transition-all before:duration-300 before:opacity-10 before:hover:opacity-0 before:hover:scale-50 after:absolute after:top-0 after:left-0 after:w-full after:h-full after:opacity-0 after:transition-all after:duration-300 after:border after:border-white/50 after:scale-125 after:hover:opacity-100 after:hover:scale-100">
                                <span class="relative font-thin text-white">Log in</span>
                            </a>
                        </div>
                    </div>
                    <div class="w-5/6 lg:max-w-lg lg:w-full md:w-1/2">
                        <img class="object-cover object-center rounded-lg" alt="hero" src="../assets/images/bg-img-sideview.jpg">
                    </div>
                </div>
            </section>
        </div>
        <footer class="w-full p-4 text-center border-t">
            <div class="text-sm text-white font-noto">
                © 2023 University of Rizal System. All rights reserved.
            </div>
        </footer>
    </section>
</body>

</html>