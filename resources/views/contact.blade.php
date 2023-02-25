@extends('layout.default')

@section('title', 'Contact')

@section('content')
    <div class="grid grid-cols-2">
        <div class="col-span-2 mb-7">
            <h2 class="font-bold"><span class="text-[#c591e7]">public function</span> <span
                    class="text-[#7ca2f4]">contact</span><span class="text-[#88ddff]">(</span><span
                    class="text-[#eeffff]">$id</span><span class="text-[#88ddff]">)</span><br>
                <span class="text-[#88ddff]">{</span></h2>
            {{--            <p class="text-md text-gray-400 pl-3 p-1">// Gedurende de afgelopen jaren heb ik diverse banen en bijbanen gehad, variërend van werkzaamheden als winkelmedewerker/hulpkracht tot ontwikkelaar.</p>--}}
        </div>
        <div class="col-span-2 pl-3 p-1">
            <div class="grid grid-cols-2 gap-12">
                <a href="mailto:rick@cytorick.nl">
                    <div class="col-span-1 text-center bg-gray-700 rounded">
                        <h2 class="text-xl font-bold"><i class="fa-solid fa-envelopes-bulk"></i> E-mail</h2>
                    </div>
                </a>
                <a href="tel:0616720186">
                    <div class="col-span-1 text-center bg-gray-700 rounded">
                        <h2 class="text-xl font-bold"><i class="fa-solid fa-mobile"></i> Telefoon</h2>
                    </div>
                </a>
                <a href="https://www.linkedin.com/in/cytorick" target="_blank">
                    <div class="col-span-1 text-center bg-gray-700 rounded">
                        <h2 class="text-xl font-bold"><i class="fa-brands fa-linkedin"></i> LinkedIn</h2>
                    </div>
                </a>
                <a href="https://www.instagram.com/rick_groningen/" target="_blank">
                    <div class="col-span-1 text-center bg-gray-700 rounded">
                        <h2 class="text-xl font-bold"><i class="fa-brands fa-instagram"></i> Instagram</h2>
                    </div>
                </a>
                <a href="https://rick-visser.nl" target="_blank">
                    <div class="col-span-1 text-center bg-gray-700 rounded">
                        <h2 class="text-xl font-bold"><i class="fa-solid fa-globe"></i> Uitgebreid portfolio</h2>
                    </div>
                </a>
            </div>
        </div>
        <span class="text-[#88ddff] font-bold mt-5">}</span>
    </div>
@endsection
