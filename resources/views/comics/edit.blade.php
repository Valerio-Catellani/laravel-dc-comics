@extends('layouts.app')

@section('title', 'Edit Comics')

@section('content')
    <main id="create-comic" style="background-image: url('{{ Vite::asset('resources/img/dc-heroes.jpg') }}')" class="pb-5">
        <div class="container mine-background-color rounded-5 hype-shadow-white p-5">
            <h1 class="text-center hype-text-shadow text-white fw-bolder">Edit {{ $comic->series }}</h1>
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name='series' value="{{ $comic->series }}">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image (URL)</label>
                    <input type="text" class="form-control" id="image" name='thumb' value="{{ $comic->thumb }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price ($)</label>
                    <input type="number" class="form-control" id="price" name='price'
                        value="{{ str_replace('$', '', $comic->price) }}">
                </div>
                <div class="mb-3">
                    <label for="publisher" class="form-label">publisher</label>
                    <input type="text" class="form-control" id="publisher" name='publisher'
                        value="{{ $comic->publisher }}">
                </div>
                <div class="mb-3">
                    <label for="release_date" class="form-label">release date</label>
                    <input type="text" class="form-control" id="release_date" name='release_date'
                        value="{{ $comic->release_date }}">
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name='author' value="{{ $comic->author }}">
                </div>
                <div class="mb-3">
                    <label for="pages" class="form-label">pages</label>
                    <input type="number" class="form-control" id="pages" name='pages' value="{{ $comic->pages }}">
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label">rating</label>
                    <input type="rating" class="form-control" id="rating" name='rating' value="{{ $comic->rating }}">
                </div>
                <div class="mb-3">
                    <label for="total_votes" class="form-label">total votes</label>
                    <input type="text" class="form-control" id="total_votes" name='total_votes'
                        value="{{ $comic->total_votes }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <textarea class="form-control" id="description" name='description' value="{{ $comic->description }}">
                    </textarea>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-control" id="type" name="type">
                        <option value="comic book" {{ $comic->type == 'comic book' ? 'selected' : '' }}>Comic Book</option>
                        <option value="graphic novel" {{ $comic->type == 'graphic novel' ? 'selected' : '' }}>Graphic Novel
                        </option>
                    </select>
                </div>
                <br>
                <div class="text-center w-25 mx-auto d-flex gap-5 align-items-center justify-content-center">
                    <a href="{{ route('comics.index') }}">
                        <i role="button" type="submit"
                            class="fa-solid fa-arrow-left fs-1 text-primary hype-text-shadow hype-hover-size fs-1"></i>
                    </a>

                    <button class="my-button text-success hype-text-shadow fs-1" type="submit">
                        <i class="fa-solid fa-floppy-disk"></i>
                    </button>
                </div>
            </form>
        </div>
    </main>


@endsection
