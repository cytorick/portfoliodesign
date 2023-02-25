<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/9b4cb69171.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
</head>
<body class="antialiased min-h-screen bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white">
<main class="min-h-screen">
    <section class="container mx-auto py-20">
        <div class="grid grid-cols-6 gap-4">
            <div class="col-span-6 hidden md:block">
                <div class="bg-transparent p-5 rounded-lg">
                    <div class="font-bold text-center">
                        <h1 class="text-3xl">RV</h1>
                    </div>
                </div>
            </div>
            <div class="col-span-6 m-1 md:m-0 md:hidden">
                <div class="navbar bg-gray-900 p-5 rounded-lg">
                    <div class="flex-1">
                        <h1 class="text-3xl font-bold">RV</h1>
                    </div>
                    <div class="flex-none">
                        <a href="#my-modal-2" class="btn bg-gray-900 hover:bg-black text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 font-bold">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-2 hidden md:block">
                <div class="bg-gray-900 p-5 rounded-lg">
                    <div class="font-bold">
                        <span class="text-[#c591e7]">public function</span> <span
                            class="text-[#7ca2f4]">menu</span><span class="text-[#88ddff]">(</span><span
                            class="text-[#eeffff]">$id</span><span class="text-[#88ddff]">)</span><br>
                        <span class="text-[#88ddff]">{</span>
                        <a href="{{ route('home') }}">
                            <div
                                class="code-link hover:bg-gray-700 p-1 pl-3 rounded">
                                <span class="text-xs font-normal text-gray-400">// wie ben ik</span> <br>
                                <span class="text-[#ff5370]">$this</span><span class="text-[#88ddff]">-></span><span
                                    class="text-[#eeffff]">browse</span> <span class="text-[#88ddff]">=></span> <span
                                    class="text-[#c3e88d]">"Rick"</span>
                            </div>
                        </a>
                        <a href="{{ route('skills') }}">
                            <div
                                class="code-link hover:bg-gray-700 p-1 pl-3 rounded">
                                <span class="text-xs font-normal text-gray-400">// mijn skills</span> <br>
                                <span class="text-[#ff5370]">$this</span><span class="text-[#88ddff]">-></span><span
                                    class="text-[#eeffff]">browse</span> <span class="text-[#88ddff]">=></span> <span
                                    class="text-[#c3e88d]">"Skills"</span>
                            </div>
                        </a>
                        <a href="{{ route('experience') }}">
                            <div
                                class="code-link hover:bg-gray-700 p-1 pl-3 rounded">
                                <span class="text-xs font-normal text-gray-400">// mijn ervaring</span> <br>
                                <span class="text-[#ff5370]">$this</span><span class="text-[#88ddff]">-></span><span
                                    class="text-[#eeffff]">browse</span> <span class="text-[#88ddff]">=></span> <span
                                    class="text-[#c3e88d]">"Carrière"</span>
                            </div>
                        </a>
                        <a href="{{ route('projects') }}">
                            <div
                                class="code-link hover:bg-gray-700 p-1 pl-3 rounded">
                                <span class="text-xs font-normal text-gray-400">// mijn projecten</span> <br>
                                <span class="text-[#ff5370]">$this</span><span class="text-[#88ddff]">-></span><span
                                    class="text-[#eeffff]">browse</span> <span class="text-[#88ddff]">=></span> <span
                                    class="text-[#c3e88d]">"Projecten"</span>
                            </div>
                        </a>
                        <span class="text-[#88ddff]">}</span>
                    </div>
                </div>
            </div>
            <div class="col-span-6 m-1 md:m-0 md:col-span-4">
                <div class="bg-gray-900 p-5 rounded-lg">
                    @yield('content')
                </div>
            </div>
            <div class="col-span-6">
                <div class="bg-transparant p-5 rounded-lg">
                    <div class="font-bold text-center">
                        <p class="text-md">© {{ \Carbon\Carbon::now()->format('Y') }} - Rick Visser</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal bg-gray-900" id="my-modal-2">
        <div class="modal-box bg-gray-900 shadow-none p-0">
            <div class="navbar bg-gray-900 rounded-lg">
                <div class="flex-1"></div>
                <div class="flex-none">
                    <a href="#" class="btn bg-gray-900 hover:bg-black text-white border-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="font-bold mt-5">
                <span class="text-[#c591e7]">public function</span> <span
                    class="text-[#7ca2f4]">menu</span><span class="text-[#88ddff]">(</span><span
                    class="text-[#eeffff]">$id</span><span class="text-[#88ddff]">)</span><br>
                <span class="text-[#88ddff]">{</span>
                <a href="{{ route('home') }}">
                    <div
                        class="code-link hover:bg-gray-700 p-1 pl-3 rounded">
                        <span class="text-xs font-normal text-gray-400">// wie ben ik</span> <br>
                        <span class="text-[#ff5370]">$this</span><span class="text-[#88ddff]">-></span><span
                            class="text-[#eeffff]">browse</span> <span class="text-[#88ddff]">=></span> <span
                            class="text-[#c3e88d]">"Rick"</span>
                    </div>
                </a>
                <a href="{{ route('skills') }}">
                    <div
                        class="code-link hover:bg-gray-700 p-1 pl-3 rounded">
                        <span class="text-xs font-normal text-gray-400">// mijn skills</span> <br>
                        <span class="text-[#ff5370]">$this</span><span class="text-[#88ddff]">-></span><span
                            class="text-[#eeffff]">browse</span> <span class="text-[#88ddff]">=></span> <span
                            class="text-[#c3e88d]">"Skills"</span>
                    </div>
                </a>
                <a href="{{ route('experience') }}">
                    <div
                        class="code-link hover:bg-gray-700 p-1 pl-3 rounded">
                        <span class="text-xs font-normal text-gray-400">// mijn ervaring</span> <br>
                        <span class="text-[#ff5370]">$this</span><span class="text-[#88ddff]">-></span><span
                            class="text-[#eeffff]">browse</span> <span class="text-[#88ddff]">=></span> <span
                            class="text-[#c3e88d]">"Carrière"</span>
                    </div>
                </a>
                <a href="{{ route('projects') }}">
                    <div
                        class="code-link hover:bg-gray-700 p-1 pl-3 rounded">
                        <span class="text-xs font-normal text-gray-400">// mijn projecten</span> <br>
                        <span class="text-[#ff5370]">$this</span><span class="text-[#88ddff]">-></span><span
                            class="text-[#eeffff]">browse</span> <span class="text-[#88ddff]">=></span> <span
                            class="text-[#c3e88d]">"Projecten"</span>
                    </div>
                </a>
                <span class="text-[#88ddff]">}</span>
            </div>
{{--            <div class="font-bold mt-5">--}}
{{--                <span class="text-[#c591e7]">public function</span> <span--}}
{{--                    class="text-[#7ca2f4]">sluit</span><span class="text-[#88ddff]">(</span><span--}}
{{--                    class="text-[#eeffff]">$id</span><span class="text-[#88ddff]">)</span><br>--}}
{{--                <span class="text-[#88ddff]">{</span>--}}
{{--                <a href="#">--}}
{{--                    <div--}}
{{--                        class="code-link hover:bg-gray-700 p-1 pl-3 rounded">--}}
{{--                        <span class="text-[#ff5370]">$this</span><span class="text-[#88ddff]">-></span><span--}}
{{--                            class="text-[#eeffff]">modal</span> <span class="text-[#88ddff]">=></span> <span--}}
{{--                            class="text-[#c3e88d]">"false"</span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                <span class="text-[#88ddff]">}</span>--}}
{{--            </div>--}}
        </div>
    </div>
</main>
</body>
</html>
