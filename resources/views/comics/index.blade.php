@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <main class="text-white d-flex flex-column align-items-center justify-content-center ">
        <div class="jumbotron-container">
            <img class="vw-100 img-fluid" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Jumbotron">
        </div>
        <div class="container">
            <div role="button" class="mine-button text-center py-2 m-4 align-self-center" id="current-series">CURRENT SERIES
            </div>
            <div class="card-container row gap-3 py-1 justify-content-center ">
                @foreach ($data['comics'] as $comic)
                    <div class="card p-1 col-5 col-md-6 col-lg-3 col-xl-2 mb-2 " role="button">
                        <div class="img-container">
                            <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        </div>
                        <h3 class="mb-0 mt-2 text-black text-center">{{ strtoupper($comic['series']) }}</h3>
                        <p>PRICE: {{ $comic['price'] }}</p>
                    </div>
                @endforeach
            </div>
            <div role="button" class="mine-button text-center py-2 m-4 align-self-center" id="load-more">LOAD MORE</div>
        </div>
    </main>

@endsection
