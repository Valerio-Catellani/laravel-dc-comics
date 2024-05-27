@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main id="home" style="background-image: url('{{ Vite::asset('resources/img/dc-heroes.jpg') }}')">
        <h1 class=" main-title text-white text-center display-1 fw-bolder hype-text-shadow">BENEVENUTO SU DC COMICS</h1>
    </main>

@endsection
