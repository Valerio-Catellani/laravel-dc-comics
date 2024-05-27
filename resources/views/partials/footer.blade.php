<footer>
    <div id="merchandising">
        <div class="container">
            <div class="row justify-content-center">
                <div class="merch-container d-flex align-items-center justify-content-center py-5 px-2">
                    @foreach ($data['footerMenuLinks']['merchandaisingItems'] as $merch)
                        <div class="img-container d-flex align-items-center justify-content-center mx-1">
                            <img class="img-fluid h-100" src="{{ Vite::asset('resources/img/' . $merch['img']) }}"
                                alt="{{ $merch['name'] }}">
                        </div>
                        <h5>{{ strtoupper($merch['name']) }}</h5>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <div id="menu" style="background-image: url('{{ Vite::asset('resources/img/footer-bg.jpg') }}')">
        <div class="container mine-container d-flex flex-column flex-wrap align-content-start"
            style="background-image: url('{{ Vite::asset('resources/img/dc-logo-bg.png') }}')">
            @foreach ($data['footerMenuLinks']['menues'] as $footerMenu)
                <ul>
                    <h3>{{ strtoupper($footerMenu['name']) }}</h3>
                    @foreach ($footerMenu['items'] as $menuVoice)
                        <li>
                            <a href="{{ $menuVoice['url'] }}">{{ $menuVoice['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </div>
    <div id="contacts">
        <div class="container py-4 d-flex justify-content-between align-items-center ">
            <button role="button">
                SING-UP NOW!
            </button>
            <div class="contact-container d-flex align-items-center justify-content-center gap-3">
                <h4 class="mb-0 mx-3">Follow us</h4>
                @foreach ($data['footerMenuLinks']['contacts'] as $contact)
                    <div>
                        <a href="{{ $contact['url'] }}">
                            <img src="{{ Vite::asset('/resources/img/' . $contact['img']) }}"
                                alt="{{ $contact['name'] }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</footer>
