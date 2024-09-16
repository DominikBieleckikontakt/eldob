<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  @vite(['public/sass/app.scss', 'resources/js/app.js', 'public/js/app.js'])
</head>
<body>
  <nav class="navbar navbar-expand-xl fixed-top">
    <div class="nav__container">
      <a href="/" class="logo__container navbar-brand">
        <img alt="Logo Eldob" src="{{ asset('img/logo.png') }}" class="logo">
      </a>
      <div class="btns__container">
        <div class="language-select-container smaller">
            <select id="languageSwitcher" class="language-switcher">
                <option value="en" data-flag="flags/us.svg">en</option>
                <option value="pl" data-flag="flags/fr.svg">pl</option>
                <option value="cz" data-flag="flags/es.svg">cz</option>
            </select>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <x-nav-link href="/oferta" class="a__link {{ request()->is('oferta') ? 'active' : '' }}">Oferta</x-nav-link>
          <x-nav-link href="/sprzedaz" class="a__link {{ request()->is('sprzedaz') ? 'active' : '' }}">Sprzedaż</x-nav-link>
          <x-nav-link href="/realizacje" class="a__link {{ request()->is('realizacje') ? 'active' : '' }}">Realizacje</x-nav-link>
          <x-nav-link href="/referencje" class="a__link {{ request()->is('referencje') ? 'active' : '' }}">Referencje</x-nav-link>
          <x-nav-link href="/czym-sie-zajmujemy" class="a__link {{ request()->is('czym-sie-zajmujemy') ? 'active' : '' }}">Czym się zajmujemy</x-nav-link>
          <x-nav-link href="/kontakt" class="a__link {{ request()->is('kontakt') ? 'active' : '' }}">Kontakt</x-nav-link>
          <x-nav-link href="/kalkulator-wykonania-instalacji-elektrycznej" class="a__link a__btn {{ request()->is('kalkulator-wykonania-instalacji-elektrycznej') ? 'active' : '' }}">Wycena</x-nav-link>
        </ul>
      </div>
      <div class="language-select-container bigger">
        <select id="languageSwitcher" class="language-switcher">
            <option value="en" data-flag="flags/us.svg">en</option>
            <option value="pl" data-flag="flags/fr.svg">pl</option>
            <option value="cz" data-flag="flags/es.svg">cz</option>
        </select>
    </div>
    </nav>
    </div>
    <main>
      {{ $slot }}
    </main>
    <footer>
      <div class="footer">
        <div>
          <div class="footer__logo-container">
            <h4>O nas</h4>
            <a href="/">
              <img src="{{ asset('img/logo.png') }}" alt="Eldob Logo">
            </a>
            <div>
              <p class="description">Firma elektryczna ELDOB świadczy kompleksowe usługi, w dziedzinie szeroko pojętej energetykiej, dla klientów indywidualnych i biznesowych, na terenie całego kraju.</p>
            </div>
          </div>
          <div class="footer__nav-container">
            <h4>Nawigacja</h4>
            <ul>
              <li>
                <a href="/oferta">Oferta</a>
              </li>
              <li>
                <a href="/sprzedaz">Sprzedaż</a>
              </li>
              <li>
                <a href="/czym-sie-zajmujemy">Czym się zajmujemy</a>
              </li>
              <li>
                <a href="/realizacje">Realizacje</a>
              </li>
              <li>
                <a href="/referencje">Referencje</a>
              </li>
              <li>
                <a href="/kontakt">Kontakt</a>
              </li>
            </ul>
          </div>
          <div class="footer__services-container">
            <h4>Linki</h4>
            <ul>
              <li>
                <a href="/polityka-prywatnosci">Polityka Prywatności</a>
              </li>
              <li>
                <a href="/polityka-cookies">Polityka Cookies</a>
              </li>
            </ul>
          </div>
          <div class="footer__contact-container">
            <h4>Kontakt</h4>
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
            <p class="mt-3">43-400 Cieszyn</p>
            <p>ul. Mała 3</p>
          </div>
          </div>
        </div>
      <div class="made__by text-black">
        <div>
          Strona zaprojektowana przez:
          <a href="https://www.stronydlafirm.eu/">
              <img src="https://eldob.pl/src_eldob/img/eldob/sdf-logo.png" /> StronyDlaFirm.eu
          </a>
        </div>
      </div>
      <a href="tel:+48511844001" class="call__us-button">
          <img src="/icons/full_phone_icon.png" alt="">                     
      </a>
    </footer>
</body>
</html>