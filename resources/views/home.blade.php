@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main style="background-image: url('{{ Vite::asset('resources/img/dc-heroes.jpg') }}')">
        <h1 class="text-white text-center display-1 fw-bolder hype-text-shadow">home</h1>
    </main>

@endsection
