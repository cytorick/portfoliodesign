@extends('layout.default')

@section('title', 'Welkom!')

@section('content')
    <div class="grid grid-cols-2 mb-10">
        <div class="col-span-2 mb-7">
            <h2 class="font-bold"><span class="text-[#c591e7]">public function</span> <span
                    class="text-[#7ca2f4]">over_rick</span><span class="text-[#88ddff]">(</span><span
                    class="text-[#eeffff]">$id</span><span class="text-[#88ddff]">)</span><br>
                <span class="text-[#88ddff]">{</span></h2>
            {{--            <p class="text-md text-gray-400 pl-3 p-1">// Gedurende de afgelopen jaren heb ik diverse banen en bijbanen gehad, variërend van werkzaamheden als winkelmedewerker/hulpkracht tot ontwikkelaar.</p>--}}
        </div>
        <div class="col-span-2 pl-3 p-1">
            Ik ben van nature een enthousiast persoon. Ik ben vol enthousiasme als ik aan een taak begin. Ik zou mezelf
            misschien een avonturier noemen, omdat ik het leuk vind om zowel op persoonlijk als professioneel gebied
            nieuwe dingen te ontdekken. Ik ben pas 23 jaar oud en ik probeer het beste uit het leven te halen en er het
            mooiste van te maken.
        </div>
        <span class="text-[#88ddff] font-bold mt-5">}</span>
    </div>
    <div class="grid grid-cols-2 mb-10">
        <div class="col-span-2 mb-7">
            <h2 class="font-bold"><span class="text-[#c591e7]">public function</span> <span
                    class="text-[#7ca2f4]">foto_rick</span><span class="text-[#88ddff]">(</span><span
                    class="text-[#eeffff]">$id</span><span class="text-[#88ddff]">)</span><br>
                <span class="text-[#88ddff]">{</span></h2>
            {{--            <p class="text-md text-gray-400 pl-3 p-1">// Gedurende de afgelopen jaren heb ik diverse banen en bijbanen gehad, variërend van werkzaamheden als winkelmedewerker/hulpkracht tot ontwikkelaar.</p>--}}
        </div>
        <div class="col-span-2 pl-3 p-1">
            <img src="{{ asset('img/rick-computer.jpeg') }}" class="rounded" alt="rick-computer">
        </div>
        <span class="text-[#88ddff] font-bold mt-5">}</span>
    </div>
    <div class="grid grid-cols-2 mb-10">
        <div class="col-span-2 mb-7">
            <h2 class="font-bold"><span class="text-[#c591e7]">public function</span> <span
                    class="text-[#7ca2f4]">hobby's</span><span class="text-[#88ddff]">(</span><span
                    class="text-[#eeffff]">$id</span><span class="text-[#88ddff]">)</span><br>
                <span class="text-[#88ddff]">{</span></h2>
            {{--            <p class="text-md text-gray-400 pl-3 p-1">// Gedurende de afgelopen jaren heb ik diverse banen en bijbanen gehad, variërend van werkzaamheden als winkelmedewerker/hulpkracht tot ontwikkelaar.</p>--}}
        </div>
        <div class="col-span-2 pl-3 p-1">
            Ik heb een aantal hobby's waar ik graag mijn tijd aan besteed. Zo vind ik het bijvoorbeeld heerlijk om te
            gamen, vooral als ik samen met vrienden speel. Daarnaast houd ik ervan om dingen te klussen en te repareren,
            het is bevredigend om iets te maken en te zien dat het werkt. Ook ben ik geïnteresseerd in programmeren, ik
            vind het leuk om nieuwe dingen te creëren en problemen op te lossen. En tot slot, als ik even wil
            ontspannen, kijk ik graag naar films en series. Het is een geweldige manier om mijn geest te laten rusten en
            mijn fantasie te stimuleren.
        </div>
        <span class="text-[#88ddff] font-bold mt-5">}</span>
    </div>
    <div class="grid grid-cols-2 mb-10">
        <div class="col-span-2 mb-7">
            <h2 class="font-bold"><span class="text-[#c591e7]">public function</span> <span
                    class="text-[#7ca2f4]">opwarm_muziek</span><span class="text-[#88ddff]">(</span><span
                    class="text-[#eeffff]">$id</span><span class="text-[#88ddff]">)</span><br>
                <span class="text-[#88ddff]">{</span></h2>
            {{--            <p class="text-md text-gray-400 pl-3 p-1">// Gedurende de afgelopen jaren heb ik diverse banen en bijbanen gehad, variërend van werkzaamheden als winkelmedewerker/hulpkracht tot ontwikkelaar.</p>--}}
        </div>
        <div class="col-span-2 pl-3 p-1">
            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/2KH16WveTQWT6KOG9Rg6e2?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        </div>
        <span class="text-[#88ddff] font-bold mt-5">}</span>
    </div>
@endsection
