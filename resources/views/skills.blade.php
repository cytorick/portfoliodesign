@extends('layout.default')

@section('title', 'Skills')

@section('content')
    <div class="grid grid-cols-2">
        <div class="col-span-2 mb-7">
            <h2 class="font-bold"><span class="text-[#c591e7]">public function</span> <span
                    class="text-[#7ca2f4]">skills</span><span class="text-[#88ddff]">(</span><span
                    class="text-[#eeffff]">$id</span><span class="text-[#88ddff]">)</span><br>
                <span class="text-[#88ddff]">{</span></h2>
            {{--            <p class="text-md text-gray-400 pl-3 p-1">// Gedurende de afgelopen jaren heb ik diverse banen en bijbanen gehad, variërend van werkzaamheden als winkelmedewerker/hulpkracht tot ontwikkelaar.</p>--}}
        </div>
        <div class="col-span-2 pl-3 p-1">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <a href="https://laravel.com/" target="_blank">
                    <div class="col-span-1 text-center bg-gray-800 hover:bg-gray-700 p-4 rounded">
                        <h2 class="text-xl font-bold"><i class="fa-brands fa-laravel text-[#c3e88d] mr-3"></i> Laravel</h2>
                    </div>
                </a>
                <a href="https://laravel-livewire.com" target="_blank">
                    <div class="col-span-1 text-center bg-gray-800 hover:bg-gray-700 p-4 rounded">
                        <h2 class="text-xl font-bold"><i class="fa-brands fa-laravel text-[#c3e88d] mr-3"></i> Livewire</h2>
                    </div>
                </a>
                <a href="https://www.php.net" target="_blank">
                    <div class="col-span-1 text-center bg-gray-800 hover:bg-gray-700 p-4 rounded">
                        <h2 class="text-xl font-bold"><i class="fa-brands fa-php text-[#c3e88d] mr-3"></i> PHP</h2>
                    </div>
                </a>
                <a href="https://tailwindcss.com" target="_blank">
                    <div class="col-span-1 text-center bg-gray-800 hover:bg-gray-700 p-4 rounded">
                        <h2 class="text-xl font-bold"><i class="fa-brands fa-laravel text-[#c3e88d] mr-3"></i> Tailwind</h2>
                    </div>
                </a>
                <a href="https://en.wikipedia.org/wiki/CSS" target="_blank">
                    <div class="col-span-1 text-center bg-gray-800 hover:bg-gray-700 p-4 rounded">
                        <h2 class="text-xl font-bold"><i class="fa-brands fa-css3-alt text-[#c3e88d] mr-3"></i> CSS</h2>
                    </div>
                </a>
                <a href="https://nl.wikipedia.org/wiki/HyperText_Markup_Language" target="_blank">
                    <div class="col-span-1 text-center bg-gray-800 hover:bg-gray-700 p-4 rounded">
                        <h2 class="text-xl font-bold"><i class="fa-brands fa-html5 text-[#c3e88d] mr-3"></i> HTML</h2>
                    </div>
                </a>
                <a href="https://en.wikipedia.org/wiki/SQL" target="_blank">
                    <div class="col-span-1 text-center bg-gray-800 hover:bg-gray-700 p-4 rounded">
                        <h2 class="text-xl font-bold"><i class="fa-solid fa-database text-[#c3e88d] mr-3"></i> SQL</h2>
                    </div>
                </a>
                <a href="https://www.apple.com/nl/macos/ventura/" target="_blank">
                    <div class="col-span-1 text-center bg-gray-800 hover:bg-gray-700 p-4 rounded">
                        <h2 class="text-xl font-bold"><i class="fa-brands fa-apple text-[#c3e88d] mr-3"></i> MacOs</h2>
                    </div>
                </a>
                <a href="https://www.microsoft.com/nl-nl/windows" target="_blank">
                    <div class="col-span-1 text-center bg-gray-800 hover:bg-gray-700 p-4 rounded">
                        <h2 class="text-xl font-bold"><i class="fa-brands fa-windows text-[#c3e88d] mr-3"></i> Windows</h2>
                    </div>
                </a>
                <a href="https://nl.wikipedia.org/wiki/Linux" target="_blank">
                    <div class="col-span-1 text-center bg-gray-800 hover:bg-gray-700 p-4 rounded">
                        <h2 class="text-xl font-bold"><i class="fa-brands fa-linux text-[#c3e88d] mr-3"></i> Linux</h2>
                    </div>
                </a>
            </div>
        </div>
        <span class="text-[#88ddff] font-bold mt-5">}</span>
    </div>
@endsection
