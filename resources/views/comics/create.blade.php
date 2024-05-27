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
                    <input type="text" class="form-control" id="series" name='series' required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image (URL)</label>
                    <input type="text" class="form-control" id="image" name='thumb'
                        placeholder="https://picsum.photos/id/237/200/300">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price ($)</label>
                    <input type="number" class="form-control" id="price" name='price'>
                </div>
                <select>
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                </select>
                <br>
                <button type="submit" class="btn btn-primary mt-3">Crea</button>
            </form>
    </main>
    </div>

@endsection
