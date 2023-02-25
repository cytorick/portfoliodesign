@extends('layout.default')

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
            <ul role="list" class="grid-cols-2 grid sm:grid-cols-3 gap-12 sm:space-y-0 lg:gap-x-8">
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <div class="text-xl">
                            <i class="fa-brands fa-laravel text-[#c3e88d]"></i>
                        </div>
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Laravel</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <div class="text-xl">
                            <i class="fa-brands fa-laravel text-[#c3e88d]"></i>
                        </div>
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Tailwind</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <div class="text-xl">
                            <i class="fa-brands fa-laravel text-[#c3e88d]"></i>
                        </div>
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Livewire</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <div class="text-xl">
                            <i class="fa-brands fa-php text-[#c3e88d]"></i>
                        </div>
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>PHP</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <div class="text-xl">
                            <i class="fa-brands fa-html5 text-[#c3e88d]"></i>
                        </div>
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>HTML</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <div class="text-xl">
                            <i class="fa-brands fa-css3-alt text-[#c3e88d]"></i>
                        </div>
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>CSS</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <div class="text-xl">
                            <i class="fa-solid fa-database text-[#c3e88d]"></i>
                        </div>
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>SQL</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <div class="text-xl">
                            <i class="fa-brands fa-linux text-[#c3e88d]"></i>
                        </div>
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Linux</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <div class="text-xl">
                            <i class="fa-brands fa-apple text-[#c3e88d]"></i>
                        </div>
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>MacOs</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <div class="text-xl">
                            <i class="fa-brands fa-windows text-[#c3e88d]"></i>
                        </div>
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Windows</h3>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <span class="text-[#88ddff] font-bold mt-5">}</span>
    </div>
@endsection
