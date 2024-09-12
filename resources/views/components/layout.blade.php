<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>
  

  @vite(['public/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid nav__container">
      <a href="/" class="logo__container navbar-brand">
        <img alt="Logo Eldob" src="{{ asset('img/logo.png') }}" class="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <x-nav-link href="#" class="a__link {{ request()->is('/') ? 'active' : '' }}">Oferta</x-nav-link>
          <x-nav-link href="#" class="a__link {{ request()->is('/sales') ? 'active' : '' }}">Sprzedaż</x-nav-link>
          <x-nav-link href="#" class="a__link {{ request()->is('/realizations') ? 'active' : '' }}">Realizacje</x-nav-link>
          <x-nav-link href="#" class="a__link {{ request()->is('/what') ? 'active' : '' }}">Czym się zajmujemy</x-nav-link>
          <x-nav-link href="#" class="a__link {{ request()->is('/contact') ? 'active' : '' }}">Kontakt</x-nav-link>
          <x-nav-link href="#" class="a__link {{ request()->is('/pricing') ? 'active' : '' }}">Wycena</x-nav-link>
        </ul>
      </div>
    </nav>
    </div>
    <main>
      {{ $slot }}
    </main>
</body>
</html>