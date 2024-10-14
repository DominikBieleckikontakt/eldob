<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @foreach($items as $menu_item)
        <x-nav-link
            href="{{ $menu_item->link() }}"
            class="a__link {{ request()->is('sprzedaz') ? 'active' : '' }}"
            >{{ $menu_item->getTranslatedAttribute('title', app()->getLocale()) }}</x-nav-link
        >
        @endforeach
    </ul>
</div>
