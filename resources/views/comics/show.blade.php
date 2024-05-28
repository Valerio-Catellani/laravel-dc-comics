@extends('layouts.app')

@section('title', 'Create Comics')

@section('content')
    <main id="comic-details" style="background-image: url('{{ Vite::asset('resources/img/dc-heroes.jpg') }}')" class="pb-5">
        <div class="container mine-background-color rounded-5 hype-shadow-white p-2 pb-4 mb-5">
            <h1 class="text-center hype-text-shadow text-white display-3 fw-bolder">{{ $comic['series'] }}</h1>
            <span class="fs-3 text-center d-block"><?php echo $comic->vote_tmp; ?></span>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <img class="img-fluid w-100" src="{{ $comic->thumb }}" alt="{{ $comic->series }}">
                    </div>
                    <div class="col-8 d-flex flex-column">
                        <h4 class="mb-1">Autore</h4>
                        <h6>{{ $comic->author }}</h6>
                        <h4 class="mb-1">Descrizione</h4>
                        <p>{{ $comic->description }}</p>
                        <h4 class="mb-1">Prezzo</h4>
                        <h6>{{ $comic->price }}</h6>
                        <h4 class="mb-1">Serie</h4>
                        <h6>{{ $comic->series }}</h6>
                        <h4 class="mb-1">Numero di pagine</h4>
                        <h6>
                            {{ $comic->pages }}
                        </h6>
                        <h4 class="mb-1">Voti Totali</h4>
                        <h6>
                            {{ $comic->total_votes }}
                        </h6>
                        <div class="d-flex justify-content-center align-items-center gap-5 mt-auto">
                            <a href="{{ route('comics.index') }}">
                                <i role="button" type="submit"
                                    class="fa-solid fa-arrow-left fs-1 text-primary hype-text-shadow hype-hover-size"></i>
                            </a>
                            <a href="{{ route('comics.edit', $comic->id) }}">
                                <i role="button" type="submit"
                                    class="fa-solid fa-pen-to-square fs-1 text-warning hype-text-shadow hype-hover-size"></i>
                            </a>
                            <form id="delete-form" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button id="element-delete" class="my-button text-danger hype-text-shadow fs-1"
                                    type="submit">
                                    <i class="fa-solid fa-trash-can "></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    </div>

@endsection
