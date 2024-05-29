@extends('layouts.app')

@section('title', 'Create Comics')

@section('content')
    <main id="create-comic" style="background-image: url('{{ Vite::asset('resources/img/dc-heroes.jpg') }}')" class ="pb-5">
        <div class="container mine-background-color rounded-5 hype-shadow-white p-5">
            <h1 class="text-center hype-text-shadow text-white fw-bolder">Add a Comic</h1>

            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3 @error('series') err-animation @enderror">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control @error('series') is-invalid err-animation @enderror"
                        id="series" name='series' value="{{ old('series') }}">
                    @error('series')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 @error('image') err-animation @enderror">
                    <label for="image" class="form-label">Image (URL)</label>
                    <input type="text" class="form-control @error('image') is-invalid err-animation @enderror"
                        id="image" name='thumb'
                        value="{{ old('image', 'https://picsum.photos/seed/picsum/200/300') }}">
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 @error('price') err-animation @enderror">
                    <label for="price" class="form-label">Price ($)</label>
                    <input type="number" class="form-control @error('price') is-invalid err-animation @enderror"
                        id="price" name='price' value="{{ old('price') }}">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 @error('publisher') err-animation @enderror">
                    <label for="publisher" class="form-label">Publisher</label>
                    <input type="text" class="form-control @error('publisher') is-invalid err-animation @enderror"
                        id="publisher" name='publisher' value="{{ old('publisher') }}">
                    @error('publisher')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 @error('release_date') err-animation @enderror">
                    <label for="release_date" class="form-label">Release Date</label>
                    <input type="text" class="form-control @error('release_date') is-invalid err-animation @enderror"
                        id="release_date" name='release_date' value="{{ old('release_date') }}">
                    @error('release_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 @error('author') err-animation @enderror">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control @error('author') is-invalid err-animation @enderror"
                        id="author" name='author' value="{{ old('author') }}">
                    @error('author')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 @error('pages') err-animation @enderror">
                    <label for="pages" class="form-label">Pages</label>
                    <input type="number" class="form-control @error('pages') is-invalid err-animation @enderror"
                        id="pages" name='pages' value="{{ old('pages') }}">
                    @error('pages')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 @error('rating') err-animation @enderror">
                    <label for="rating" class="form-label">Rating</label>
                    <input type="text" class="form-control @error('rating') is-invalid err-animation @enderror"
                        id="rating" name='rating' value="{{ old('rating') }}">
                    @error('rating')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 @error('total_votes') err-animation @enderror">
                    <label for="total_votes" class="form-label">Total Votes</label>
                    <input type="text" class="form-control @error('total_votes') is-invalid err-animation @enderror"
                        id="total_votes" name='total_votes' value="{{ old('total_votes') }}">
                    @error('total_votes')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 @error('description') err-animation @enderror">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid err-animation @enderror" id="description"
                        name='description' style="min-height: 300px">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 @error('type') err-animation @enderror">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-control @error('type') is-invalid err-animation @enderror" id="type"
                        name="type">
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
