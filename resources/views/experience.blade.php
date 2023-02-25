@extends('layout.default')

@section('title', 'Carrière')

@section('content')
    <div class="grid grid-cols-2 mb-10">
        <div class="col-span-2 mb-7">
            <h2 class="font-bold"><span class="text-[#c591e7]">public function</span> <span
                    class="text-[#7ca2f4]">werkervaring</span><span class="text-[#88ddff]">(</span><span
                    class="text-[#eeffff]">$id</span><span class="text-[#88ddff]">)</span><br>
                <span class="text-[#88ddff]">{</span></h2>
            {{--            <p class="text-md text-gray-400 pl-3 p-1">// Gedurende de afgelopen jaren heb ik diverse banen en bijbanen gehad, variërend van werkzaamheden als winkelmedewerker/hulpkracht tot ontwikkelaar.</p>--}}
        </div>
        <div class="col-span-2 pl-3 p-1">
            <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-12 sm:space-y-0 lg:gap-x-8">
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-20" src="{{ asset('img/rapide.png') }}" alt="">
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Developer & Support</h3>
                            <p class="text-[#c3e88d] text-sm font-normal">RAPIDE Software</p>
                            <p class="font-normal text-sm">
                                Dec 2022 -
                                Heden
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-20" src="{{ asset('img/poiesz.png') }}" alt="">
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Bezorger & Leidinggevende</h3>
                            <p class="text-[#c3e88d] text-sm font-normal">Poiesz Supermarkten</p>
                            <p class="font-normal text-sm">
                                Sep 2021 -
                                Jan 2023
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-20" src="{{ asset('img/bouwmaat.png') }}" alt="">
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Hulpkracht</h3>
                            <p class="text-[#c3e88d] text-sm font-normal">Bouwmaat</p>
                            <p class="font-normal text-sm">
                                Jun 2020 -
                                Jun 2021
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-20" src="{{ asset('img/mediamarkt.png') }}" alt="">
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Verkoopmedewerker</h3>
                            <p class="text-[#c3e88d] text-sm font-normal">Mediamarkt</p>
                            <p class="font-normal text-sm">
                                Jun 2019 -
                                Feb 2020
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-20" src="{{ asset('img/action.png') }}" alt="">
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Hulpkracht</h3>
                            <p class="text-[#c3e88d] text-sm font-normal">Action</p>
                            <p class="font-normal text-sm">
                                Dec 2015 -
                                Mar 2017
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <span class="text-[#88ddff] font-bold mt-5">}</span>
    </div>
    <div class="grid grid-cols-2 mb-10">
        <div class="col-span-2 mb-7">
            <h2 class="font-bold"><span class="text-[#c591e7]">public function</span> <span
                    class="text-[#7ca2f4]">opleidingen</span><span class="text-[#88ddff]">(</span><span
                    class="text-[#eeffff]">$id</span><span class="text-[#88ddff]">)</span><br>
                <span class="text-[#88ddff]">{</span></h2>
            {{--            <p class="text-md text-gray-400 pl-3 p-1">// Ik heb in totaal twee mbo-opleidingen gevolgd, waarvan ik er één succesvol heb afgerond. Daarnaast heb ik ook mijn middelbare schooldiploma behaald.</p>--}}
        </div>
        <div class="col-span-2 pl-3 p-1">
            <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-12 sm:space-y-0 lg:gap-x-8">
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-20" src="{{ asset('img/alfacollege.png') }}" alt="">
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>
                                Software Developer (Mbo 4)
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline text-[#c3e88d]">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                                </svg>
                            </h3>
                            <p class="text-[#c3e88d] text-sm font-normal">RAPIDE Software</p>
                            <p class="font-normal text-sm">
                                Sep 2018 -
                                Jul 2022
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-20" src="{{ asset('img/alfacollege.png') }}" alt="">
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Bouw & Infra (Mbo 4)</h3>
                            <p class="text-[#c3e88d] text-sm font-normal">RAPIDE Software</p>
                            <p class="font-normal text-sm">
                                Sep 2017 -
                                Jul 2018
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-20" src="{{ asset('img/selion.png') }}" alt="">
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>
                                VMBO-TL (Mavo)
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline text-[#c3e88d]">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                                </svg>
                            </h3>
                            <p class="text-[#c3e88d] text-sm font-normal">RAPIDE Software</p>
                            <p class="font-normal text-sm">
                                Sep 2012 -
                                Jul 2017
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <span class="text-[#88ddff] font-bold mt-5">}</span>
    </div>
    <div class="grid grid-cols-2 mb-10">
        <div class="col-span-2 mb-7">
            <h2 class="font-bold"><span class="text-[#c591e7]">public function</span> <span
                    class="text-[#7ca2f4]">stageplaatsen</span><span class="text-[#88ddff]">(</span><span
                    class="text-[#eeffff]">$id</span><span class="text-[#88ddff]">)</span><br>
                <span class="text-[#88ddff]">{</span></h2>
            {{--            <p class="text-md text-gray-400 pl-3 p-1">// Als onderdeel van mijn opleidingen ben ik verplicht geweest om stage te lopen. Tijdens deze periode heb ik bij diverse bedrijven ervaring opgedaan, namelijk:</p>--}}
        </div>
        <div class="col-span-2 pl-3 p-1">
            <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-12 sm:space-y-0 lg:gap-x-8">
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-20" src="{{ asset('img/ewa.png') }}" alt="">
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Laravel Developer</h3>
                            <p class="text-[#c3e88d] text-sm font-normal">European Whisky Auctions</p>
                            <p class="font-normal text-sm">
                                Feb 2022 -
                                Jul 2022
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-20" src="{{ asset('img/praes.png') }}" alt="">
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Laravel Developer</h3>
                            <p class="text-[#c3e88d] text-sm font-normal">Praes</p>
                            <p class="font-normal text-sm">
                                Feb 2022 -
                                Jul 2022
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-20" src="{{ asset('img/customwebsite.png') }}" alt="">
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Full-Stack Developer</h3>
                            <p class="text-[#c3e88d] text-sm font-normal">Custom Website</p>
                            <p class="font-normal text-sm">
                                Sep 2019 -
                                Feb 2020
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <span class="text-[#88ddff] font-bold mt-5">}</span>
    </div>
    <div class="grid grid-cols-2 mb-10">
        <div class="col-span-2 mb-7">
            <h2 class="font-bold"><span class="text-[#c591e7]">public function</span> <span
                    class="text-[#7ca2f4]">certificaten</span><span class="text-[#88ddff]">(</span><span
                    class="text-[#eeffff]">$id</span><span class="text-[#88ddff]">)</span><br>
                <span class="text-[#88ddff]">{</span></h2>
            {{--            <p class="text-md text-gray-400 pl-3 p-1">// Ik heb verschillende certificaten behaald door mijn opleidingen, werk en eigen initiatief. Deze certificaten tonen mijn toewijding en bekwaamheid op diverse vakgebieden aan.</p>--}}
        </div>
        <div class="col-span-2 pl-3 p-1">
            <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-12 sm:space-y-0 lg:gap-x-8">
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-20" src="{{ asset('img/ste.png') }}" alt="">
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>VCA Vol</h3>
                            <p class="text-[#c3e88d] text-sm font-normal">STE examenbureau BV</p>
                            <p class="font-normal text-sm">
                                Jan 2017 -
                                Jan 2027
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-20" src="{{ asset('img/sbk.png') }}" alt="">
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Heftruck & Reachtruck</h3>
                            <p class="text-[#c3e88d] text-sm font-normal">SBK Opleidingen</p>
                            <p class="font-normal text-sm">
                                Jul 2021 -
                                Jul 2026
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-20" src="{{ asset('img/oracle.png') }}" alt="">
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Database Programming with SQL</h3>
                            <p class="text-[#c3e88d] text-sm font-normal">Oracle</p>
                            <p class="font-normal text-sm">
                                Feb 2022
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-20" src="{{ asset('img/oracle.png') }}" alt="">
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Database Designer</h3>
                            <p class="text-[#c3e88d] text-sm font-normal">Oracle</p>
                            <p class="font-normal text-sm">
                                Jun 2021
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-20" src="{{ asset('img/cbr.png') }}" alt="">
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Rijbewijs B</h3>
                            <p class="text-[#c3e88d] text-sm font-normal">CBR</p>
                            <p class="font-normal text-sm">
                                Dec 2022 -
                                Heden
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <img class="w-20" src="{{ asset('img/socialehygiene.png') }}" alt="">
                        <div class="space-y-1 text-md font-semibold leading-6">
                            <h3>Sociale Hygiëne</h3>
                            <p class="text-[#c3e88d] text-sm font-normal">Mijn Sociale Hygiëne</p>
                            <p class="font-normal text-sm">
                                Mei 2022
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <span class="text-[#88ddff] font-bold mt-5">}</span>
    </div>
@endsection
