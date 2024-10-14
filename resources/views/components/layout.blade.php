<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }} - Eldob.pl</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  @vite(['public/sass/app.scss', 'resources/js/app.js', 'public/js/app.js'])
  <link rel="shortcut icon" href="https://eldob.pl/src_eldob/img/eldob/ikona.ico">
</head>
<body>
  <nav class="navbar navbar-expand-xl fixed-top">
    <div class="nav__container">
      <a href="{{ route('home', ['lang' => app()->getLocale()]) }}" class="logo__container navbar-brand">
        <img alt="Logo Eldob" src="{{ asset('img/logo.png') }}" class="logo">
      </a>
      <div class="btns__container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="language-select-container bigger">
          <div class="custom-select m-auto">
            <div class="selected-item">
                <img src="" alt="" id="selectedImage" style="max-width: 20px; margin-inline: auto;">
                <!-- <span id="selectedText"></span> -->
                <span>&#9662;</span>
            </div>
            <div class="dropdown-list">
                <a href="{{ route('home', ['lang' => 'pl']) }}" class="dropdown-item" data-value="pl">
                    <img src="{{ asset('icons/poland_icon.png') }}" alt="pl">
                    <!-- <span></span> -->
                </a>
                <a href="{{ route('home', ['lang' => 'en']) }}" class="dropdown-item" data-value="en">
                    <img src="{{ asset('icons/uk_icon.png') }}" alt="en">
                    <!-- <span></span> -->
                </a>
                <a href="{{ route('home', ['lang' => 'de']) }}" class="dropdown-item" data-value="de">
                    <img src="{{ asset('icons/german_icon.png') }}" alt="de">
                    <!-- <span></span> -->
                </a>
                <a href="{{ route('home', ['lang' => 'cz']) }}" class="dropdown-item" data-value="cz">
                    <img src="{{ asset('icons/czech_icon.png') }}" alt="cz">
                    <!-- <span></span> -->
                </a>
            </div>
        </div>
      </div>
      </div>
      <!-- <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0"> -->
          @if(app()->getLocale() == 'pl')
          {{ menu("menu_pl", "custom_menu") }}
          @elseif(app()->getLocale() == 'en')
          {{ menu("menu_en", "custom_menu") }}
          @elseif(app()->getLocale() == 'de')
          {{ menu("menu_de", "custom_menu") }}
          @elseif(app()->getLocale() == 'cz')
          {{ menu("menu_cz", "custom_menu") }}
          @endif
        <!-- </ul>
      </div> -->
    </nav>
    </div>
    <main>
      {{ $slot }}
    </main>
    <footer>
      <div class="footer">
        <div>
          <div class="footer__logo-container">
            <a href="{{ route('home', ['lang' => app()->getLocale()]) }}">
              <img src="{{ asset('img/logo.png') }}" alt="Eldob Logo">
            </a>
            <div>
              <p class="description">{{ __('messages.description') }}</p>
            </div>
          </div>
          <div class="footer__nav-container">
            <h4>{{ __('messages.quick_access') }}</h4>
            <ul>
              <li>
                <a href="{{ route('offers', ['lang' => app()->getLocale()]) }}">{{ __('messages.offer') }}</a>
              </li>
              <li>
                <a href="{{ route('realizations', ['lang' => app()->getLocale()]) }}">{{ __('messages.realizations') }}</a>
              </li>
              <li>
                <a href="{{ route('references', ['lang' => app()->getLocale()]) }}">{{ __('messages.references') }}</a>
              </li>
              <li>
                <a href="{{ route('contact', ['lang' => app()->getLocale()]) }}">{{ __('messages.contact') }}</a>
              </li>
            </ul>
          </div>
          <div class="footer__services-container">
            <h4>{{ __('messages.links') }}</h4>
            <ul>
              @if(app()->getLocale() == 'pl')
              <li>
                <a href="/pl/polityka-prywatnosci">{{ __('messages.privacy_policy') }}</a>
              </li>
              <li>
                <a href="/pl/polityka-cookies">{{ __('messages.cookies_policy') }}</a>
              </li>
              @elseif(app()->getLocale() == 'en')
              <li>
                <a href="/en/privacy-policy">{{ __('messages.privacy_policy') }}</a>
              </li>
              <li>
                <a href="/en/cookies-policy">{{ __('messages.cookies_policy') }}</a>
              </li>
              @elseif(app()->getLocale() == 'de')
              <li>
                <a href="/de/datenschutzbestimmungen">{{ __('messages.privacy_policy') }}</a>
              </li>
              <li>
                <a href="/de/cookies-politik">{{ __('messages.cookies_policy') }}</a>
              </li>
              @elseif(app()->getLocale() == 'cz')
               <li>
                <a href="/cz/zasady-ochrany-osobnich-udaju">{{ __('messages.privacy_policy') }}</a>
              </li>
              <li>
                <a href="/cz/zasady-pouzivani-souboru-cookie">{{ __('messages.cookies_policy') }}</a>
              </li>
              @endif
            </ul>
          </div>
          <div class="footer__contact-container">
            <h4>{{ __('messages.contact') }}</h4>
            <ul>
              <li>
                <a href="tel:+48511844001">+48 511 844 001</a>
              </li>
              <li>
                <a href="mailto:kontakt@eldob.pl">kontakt@eldob.pl</a>
              </li>
              <li>
                <a href="mailto:sprzedaz@eldob.pl">sprzedaz@eldob.pl</a>
              </li>
            </ul>
            <p class="mt-3">
              NIP: 5482737901
            </p>
            <p>
              REGON: 38954041000000
            </p>
            <p>
              KRS: 0000912461
            </p>
            <p class="mt-3">43-400 Cieszyn</p>
            <p>ul. Mała 3</p>
          </div>
          </div>
        </div>
      <div class="made__by text-black">
        <div>
          {{ __('messages.footer_author') }}
          <a href="https://digitalowa.pl/pl/">
              <img src="https://eldob.pl/src_eldob/img/eldob/sdf-logo.png" /> Agencja Digitalowa.pl
          </a>
        </div>
      </div>
      <a href="tel:+48511844001" class="call__us-button">
          <img src="/icons/full_phone_icon.png">                     
      </a>
    </footer>
</body>
</html>