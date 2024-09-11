<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>{{ $title }}</title>
</head>
<body>
  <nav>
    <a href="/" class="logo__container">
      <img alt="Logo Eldob" src="{{ asset('img/logo.png') }}" class="logo">
    </a>
    <ul>
      <li><a href="">Oferta</a></li>
      <li><a href="">Sprzedaż</a></li>
      <li><a href="">Realizacje</a></li>
      <li><a href="">Referencje</a></li>
      <li><a href="">Czym się zajmujemy</a></li>
      <li><a href="">Kontakt</a></li>
      <li><a href="" class="link__btn">Wycena</a></li>
    </ul>
  </nav>
  {{ $slot }}
</body>
</html>