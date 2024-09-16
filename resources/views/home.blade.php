<x-layout>
    <x-slot:title>Eldob</x-slot:title>  
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
        <div class="swiper-slide">
            <x-banner src="{{ asset('img/banner.png') }}">
                <x-slot:title>Sprzedaż hurtowa i detaliczna</x-slot>
                Kable i przewody, aparatura modułowa, rozdzielnice elektryczne, oświetlenie LED, oprawy oświetleniowe, osprzęt instalacyjny, osprzęt odgromowy, osprzęt siłowy, oświetlenie awaryjne, koryta i inne...
                <x-slot:button>Czytaj więcej</x-slot:button>
            </x-banner>
        </div>
        <div class="swiper-slide">
            <x-banner src="{{ asset('img/banner.png') }}">
                <x-slot:title>Instalacje elektryczne, telewizyjne, telefoniczne</x-slot>
                Wykonujemy instalacje elektryczne w nowych budynkach przy inwestycjach deweloperskich, biurowcach, halach produkcyjnych jak i w mieszkaniach oraz domach jednorodzinnych.
                <x-slot:button>Czytaj więcej</x-slot:button>
            </x-banner>
        </div>
        <div class="swiper-slide">
            <x-banner src="{{ asset('img/banner.png') }}">
                <x-slot:title>Instalacje elektryczne, telewizyjne, telefoniczne</x-slot>
                Wykonujemy instalacje elektryczne w nowych budynkach przy inwestycjach deweloperskich, biurowcach, halach produkcyjnych jak i w mieszkaniach oraz domach jednorodzinnych.
                <x-slot:button>Czytaj więcej</x-slot:button>
            </x-banner>
        </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <section class="offer__section">
        <x-heading>
            <x-slot:subtitle>Co potrafimy zrobić?</x-slot>
            Nasza Oferta<span class="dot">.</span>
        </x-heading>
        <div class="offer__grid container">
            <div class="offer__card slideIn">
                <a href="/oferta/1">
                    <img src="{{ asset('img/offer_image.png') }}" alt="offer">
                    <div class="offer__text">
                        <h4>Instalacje Teletechniczne</h3>
                        <p>(instalacje niskoprądowe) w odróżnieniu od instalacji tzw. elektrycznych, działają na niskich napięciach prądu (np. 12V lub 24V).</p>
                    </div>
                </a>
            </div>
            <div class="offer__card slideIn">
                <a href="/oferta/1">
                    <img src="{{ asset('img/offer_image.png') }}" alt="offer">
                    <div class="offer__text">
                        <h4>Instalacje Teletechniczne</h3>
                        <p>(instalacje niskoprądowe) w odróżnieniu od instalacji tzw. elektrycznych, działają na niskich napięciach prądu (np. 12V lub 24V).</p>
                    </div>
                </a>
            </div>
            <div class="offer__card slideIn">
                <a href="/oferta/1">
                    <img src="{{ asset('img/offer_image.png') }}" alt="offer">
                    <div class="offer__text">
                        <h4>Instalacje Teletechniczne</h3>
                        <p>(instalacje niskoprądowe) w odróżnieniu od instalacji tzw. elektrycznych, działają na niskich napięciach prądu (np. 12V lub 24V).</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="btn__container">
            <button>
                <a href="/oferta">Czytaj więcej</a>
            </button>
        </div>
    </section>
    
    <section class="realization">
        <x-heading>
            <x-slot:subtitle>Co już zrobiliśmy?</x-slot>
            Nasze Realizacje<span class="dot">.</span>
        </x-heading>
        <div class="realization__section">
            <div>
                <img src="{{ asset('img/realization_example.jpg') }}" alt="realizacja">
            </div>
            <div>
                <img src="{{ asset('img/realization_example.jpg') }}" alt="realizacja">
            </div>
            <div>
                <img src="{{ asset('img/realization_example.jpg') }}" alt="realizacja">
            </div>
            <div>
                <img src="{{ asset('img/realization_example.jpg') }}" alt="realizacja">
            </div>
            <div>
                <img src="{{ asset('img/realization_example.jpg') }}" alt="realizacja">
            </div>
            <div>
                <img src="{{ asset('img/realization_example.jpg') }}" alt="realizacja">
            </div>
            <div>
                <img src="{{ asset('img/realization_example.jpg') }}" alt="realizacja">
            </div>
            <div>
                <img src="{{ asset('img/realization_example.jpg') }}" alt="realizacja">
            </div>
        </div>
    </section>
</x-layout>