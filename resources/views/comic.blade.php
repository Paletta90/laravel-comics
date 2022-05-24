@extends('layout.layout')

@section('title', 'singolo fumetto')

@section('content')

{{-- Barra colorata --}}
<div class="barra"></div>

<div id="comicTop">

    {{-- Dati del singolo fumetto --}}
    <div class="bar-img">

        {{-- Parte sinistra --}}
        <div style="width: 80%">
            {{-- Titolo --}}
            <h2>{{ $fumetto['title'] }}</h2>

            {{-- Parte verde con prezzo e disponibilità --}}
            <div class="button">

                {{-- 70% --}}
                <div class="price">
                   <div> US Price: <span>{{ $fumetto['price'] }}</span></div>
                   <div>Availbaility</div>
                </div>
                {{-- 30% --}}
                <div>
                    check availability
                </div>

            </div>

            {{-- Descrizione --}}
            <p>{{ $fumetto['description'] }}</p>

        </div>

        {{-- Parte destra immagine --}}
        <div style="width:20%">
            <img src="../../images/adv.jpg" alt="" width="100%">
        </div>

    </div>


</div>

<div id="comicBottom">

    

</div>

@endsection
