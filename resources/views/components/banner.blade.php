<div class="banner__container">
    <img {{ $attributes }} alt="banner" />
        <div class="banner__text">
            <h1>{{ $title }}</h1>
            <p>{{ $slot }}</p>
            @if($button ?? null)
            <a href="/oferta/1">
                {{ $button }}
            </a>
            @endif
        </div>
</div>
