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
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid nav__container">
      <a href="/" class="logo__container navbar-brand">
        <img alt="Logo Eldob" src="{{ asset('img/logo.png') }}" class="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
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
    </nav>
    </div>
    <main>
      {{ $slot }}
    </main>
    <footer>
      <div>
        <div class="footer__logo-container">
          <a href="/">
            <img src="{{ asset('img/logo.png') }}" alt="Eldob Logo">
          </a>
          <div>
            <p>43-400 Cieszyn,</p>
            <p>ul. Mała 3</p>
          </div>
        </div>
        <div class="footer__nav-container">
          <h6>Nawigacja</h6>
          <ul>
            <li>
              <a href="/oferta">Oferta</a>
            </li>
            <li>
              <a href="/realizacje">Realizacje</a>
            </li>
            <li>
              <a href="/czym-sie-zajmujemy">Czym się zajmujemy</a>
            </li>
            <li>
              <a href="/polityka-cookies">Polityka Cookies</a>
            </li>
            <li>
              <a href="/polityka-prywatnosci">Polityka Prywatności</a>
            </li>
            <li>
              <a href="/nasze-certyfikaty">Certyfikaty</a>
            </li>
            <li>
              <a href="/kontakt">Kontakt</a>
            </li>
          </ul>
        </div>
        <div class="footer__services-container">
          <h6>Usługi</h6>
          <ul>
            <li>
              <a href="#">Instalacje elektryczne</a>
            </li>
            <li>
              <a href="#">Instalacje Teletechniczne</a>
            </li>
            <li>
              <a href="#">Instalacje odgromowe</a>
            </li>
            <li>
              <a href="#">Systemy Alarmowe</a>
            </li>
            <li>
              <a href="#">Usługi minikoparką</a>
            </li>
            <li>
              <a href="#">Systemy Monitoringu</a>
            </li>
            <li>
              <a href="#">Instalacje Przemysłowe</a>
            </li>
            <li>
              <a href="#">Pomiary Elektryczne</a>
            </li>
            <li>
              <a href="#">Fotowoltaika</a>
            </li>
          </ul>
        </div>
        </div>
    </div>
    </footer>
</body>
</html>