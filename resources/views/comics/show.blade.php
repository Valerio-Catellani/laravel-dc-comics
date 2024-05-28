@extends('layouts.app')

@section('title', 'Create Comics')

@section('content')
    <main id="comic-details" style="background-image: url('{{ Vite::asset('resources/img/dc-heroes.jpg') }}')" class="pb-5">
        <div class="container mine-background-color rounded-5 hype-shadow-white p-2 mb-5">
            <h1 class="text-center hype-text-shadow text-white display-3 fw-bolder">{{ $comic['series'] }}</h1>
            <span class="fs-3 text-center d-block"><?php echo $comic->vote_tmp; ?></span>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <img class="img-fluid w-100" src="{{ $comic->thumb }}" alt="{{ $comic->series }}">
                    </div>
                    <div class="col-8">
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
                        <div class="d-flex justify-content-center gap-5">
                            <a href="{{ route('comics.edit', $comic->id) }}" class="w-25">
                                <button type="submit" class="btn btn-warning shadow w-100">Edit</button>
                            </a>
                            <form id="delete-form" action="{{ route('comics.destroy', $comic->id) }}" method="POST"
                                class="w-25">
                                @csrf
                                @method('DELETE')
                                <button id="element-delete" type="submit"
                                    class="btn btn-danger shadow w-100">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    </div>

@endsection
