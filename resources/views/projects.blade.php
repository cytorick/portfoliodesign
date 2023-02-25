@extends('layout.default')

@section('content')
    <div class="grid grid-cols-2">
        <div class="col-span-2 mb-7">
            <h2 class="font-bold"><span class="text-[#c591e7]">public function</span> <span
                    class="text-[#7ca2f4]">projecten</span><span class="text-[#88ddff]">(</span><span
                    class="text-[#eeffff]">$id</span><span class="text-[#88ddff]">)</span><br>
                <span class="text-[#88ddff]">{</span></h2>
            {{--            <p class="text-md text-gray-400 pl-3 p-1">// Gedurende de afgelopen jaren heb ik diverse banen en bijbanen gehad, variërend van werkzaamheden als winkelmedewerker/hulpkracht tot ontwikkelaar.</p>--}}
        </div>
        <div class="col-span-2 pl-3 p-1">
            <ul role="list" class="space-y-12 sm:grid sm:grid-cols-1 sm:gap-12 sm:space-y-0 lg:gap-x-8">
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-20" src="{{ asset('img/ewa.png') }}" alt="">
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Scanner applicatie</h3>
                            <p class="text-[#c3e88d] text-sm font-normal">European Whisky Auctions</p>
                            <p class="font-normal text-sm">
                                De web-applicatie, gebouwd met Laravel en gestyled met Tailwind, maakt gebruik van Livewire en biedt de mogelijkheid om voorraad te beheren en te verplaatsen door middel van een QR-code scanner.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-20" src="{{ asset('img/ewa.png') }}" alt="">
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Voorraadbeheersysteem</h3>
                            <p class="text-[#c3e88d] text-sm font-normal">European Whisky Auctions</p>
                            <p class="font-normal text-sm">
                                De web-applicatie, gebouwd met Laravel en gestyled met Tailwind, maakt gebruik van Livewire en biedt de mogelijkheid om het gehele veilingsysteem te beheren.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-20" src="{{ asset('img/rick-netjes-nobg.png') }}" alt="">
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Portfolio</h3>
                            <p class="text-[#c3e88d] text-sm font-normal">Prive</p>
                            <p class="font-normal text-sm">
                                Ik heb mijn eerste openbare project gemaakt in Laravel met Livewire en TailwindCSS. Deze website heeft een lichte en donkere modus en bevat zelfs een CMS waarmee ik alle records op de site kan toevoegen en bewerken. Het heeft me in totaal 3 maanden gekost om de website te bouwen en in december 2022 heb ik het CMS volledig opnieuw ontworpen.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <span class="text-[#88ddff] font-bold mt-5">}</span>
    </div>
@endsection
