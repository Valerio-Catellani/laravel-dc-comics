<header class="shadow">
    <div class="container d-flex justify-content-between h-100">
        <div id="img-container" class="h-100 p-2">
            <img class="img-fluid h-100" src="{{ Vite::asset('resources/img/dc-logo.png') }}">
        </div>
        <div>
            <ul class="d-flex mb-0 h-100">
                @foreach ($data['navMenuLinks'] as $menuVoice)
                    <li>
                        <a href="{{ route($menuVoice['url']) }}">{{ $menuVoice['name'] }}</a>
                        <div
                            class="underline-bar {{ Route::currentRouteName() === $menuVoice['name'] ? '' : 'opacity-0' }}">
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>
