@extends('layout.layout')

@section('content')

<div id="comics">

    <div><span class="button">current series</span></div>

    <div class="contenitore">
        @foreach ($fumetti as $item)

        <div class="movie">
            <div class="bg-movie" style="background-image: url('{{$item['thumb']}}')"></div>
            <p>{{$item['series']}}</p>
        </div>

        @endforeach
    </div>

</div>

@endsection
