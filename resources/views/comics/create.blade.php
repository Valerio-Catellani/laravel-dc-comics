@extends('layouts.app')

@section('title', 'Create Comics')

@section('content')
    <main id="create-comic" style="background-image: url('{{ Vite::asset('resources/img/dc-heroes.jpg') }}')">
        <div class="container mine-background-color rounded-5 hype-shadow-white p-5">
            <h1 class="text-center hype-text-shadow text-white fw-bolder">Add a Comic</h1>

            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name='series'>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image (URL)</label>
                    <input type="text" class="form-control" id="image" name='thumb'
                        value="https://picsum.photos/seed/picsum/200/300">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price ($)</label>
                    <input type="number" class="form-control" id="price" name='price'>
                </div>
                <div class="mb-3">
                    <label for="publisher" class="form-label">publisher</label>
                    <input type="text" class="form-control" id="publisher" name='publisher'>
                </div>
                <div class="mb-3">
                    <label for="release_date" class="form-label">release date</label>
                    <input type="text" class="form-control" id="release_date" name='release_date'>
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name='author'>
                </div>
                <div class="mb-3">
                    <label for="pages" class="form-label">pages</label>
                    <input type="number" class="form-control" id="pages" name='pages'>
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label">rating</label>
                    <input type="rating" class="form-control" id="rating" name='rating'>
                </div>
                <div class="mb-3">
                    <label for="total_votes" class="form-label">total votes</label>
                    <input type="text" class="form-control" id="total_votes" name='total_votes'>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <textarea class="form-control" id="description" name='description'>
                    </textarea>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-control" id="type" name="type">
                        <option value="comic book">Comic Book</option>
                        <option value="graphic novel">Graphic Novel</option>
                    </select>
                </div>
                <br>
                <div class="text-center w-25 mx-auto d-flex gap-2">
                    <button type="submit" class="btn btn-primary mt-3 w-100">Update</button>
                    <a href="{{ route('comics.index') }}" class="btn btn-secondary mt-3 w-100">Back</a>
                </div>
            </form>
        </div>
    </main>

@endsection
