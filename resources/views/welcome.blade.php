<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Pacifico&display=swap" rel="stylesheet" />
</head>

<body class="antialiased">
    <div class="bg-gradient-to-tr from-slate-900 to-blue-800 min-h-screen px-32">
        @if (Route::has('login'))
            <nav class="flex justify-between items-center py-2">
                <div class="flex flex-wrap justify-center items-center gap-4">
                    <img class="h-16 w-auto" src="../assets/images/seal-logo.png" alt="urs_logo">
                    <div class="text-white font-noto">
                        <div class="text-xl text-center">University of Rizal System</div>
                        <p class="italic text-xs sm:tracking-widest">"Nurturing Tomorrow's Noblest"</p>
                    </div>
                </div>

                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    {{-- @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif --}}
                @endauth
            </nav>
        @endif
        <div class="flex justify-center items-center">
            <div class="py-16">

                <div class="grid grid-cols-2 gap-12">
                    <div class="">
                        <div class="text-white">
                            <h1 class="font-serif font-bold text-5xl">
                                Faculty Evaluation System for Binangonan Campus
                            </h1>

                            <p class="pt-8 text-lg indent-8 leading-loose">
                                The system will be a significant technological advancement in showcasing the credibility
                                of the school and high standard education of the institution. This acts as support in
                                maintaining quality education through transparent reports and a bias-free assessment
                                process of the faculty.</p>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <div class="bg-blue-300 h-80 w-[570px] pl-8 pt-8 rounded-xl relative">
                            <img class="h-80 w-auto rounded-xl absolute" src="../assets/images/bg-img-frontview.jpg"
                                alt="urs building front-view">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <footer class="shadow absolute bottom-0">
            <div class="text-white">
                This is footer
            </div>
        </footer>
    </div>
</body>

</html>
