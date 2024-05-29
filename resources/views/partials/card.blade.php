<div class="card p-1 col-5 col-md-6 col-lg-3 col-xl-2 mb-4 d-flex flex-column">
    <div class="img-container">
        <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->series }}">
    </div>
    <h5 class="mb-0 mt-2 text-black text-center">{{ strtoupper($comic->series) }}</h5>
    <div class='d-flex my-1'>
        <span>vote:</span>
        {!! $comic->vote_tmp !!}
    </div>
    <p class="my-1">TYpe: {{ $comic->type }}</p>
    <div class="d-flex justify-content-center gap-4 mt-auto">
        <a class="text-decoration-none text-center text-secondary" href="{{ route('comics.show', $comic->id) }}">
            <i role="button" class="fa-solid fa-circle-info fs-2 hype-hover-size "></i>
        </a>
        <a class="text-decoration-none text-center text-warning" href="{{ route('comics.edit', $comic->id) }}">
            <i role="button" class="fa-solid fa-pen-to-square fs-2 hype-hover-size hype-text-shadow"></i>
        </a>
    </div>
</div>
