<div class="banner__container">
  <img {{ $attributes }} alt="banner">
  <div class="banner__text">
      <h1>{{ $title }}</h1>
      <p>{{ $slot }}</p>
      <button>{{ $button }}</button>
  </div>
</div>