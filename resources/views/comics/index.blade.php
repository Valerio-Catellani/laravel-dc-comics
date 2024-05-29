@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <main id="all-comics" class="text-white ">
        <div class="jumbotron-container">
            <img class="vw-100 img-fluid" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Jumbotron">
        </div>
        <div class="container">
            <div role="button" class="mine-button text-center py-2 m-4 align-self-center" id="current-series">CURRENT SERIES
            </div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="card-container row gap-3 py-1 justify-content-center ">
                @foreach ($comics as $comic)
                    @include('partials.card', $comic)
                @endforeach
            </div>
            <a href="{{ route('comics.create') }}" class="text-white text-decoration-none">
                <div role="button" class="mine-button text-center py-2 m-4 align-self-center" id="load-more">Add a new
                    Comic
                </div>
            </a>
        </div>
    </main>

@endsection
