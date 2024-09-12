<x-layout>
    <x-slot:title>Eldob</x-slot:title>  
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
        <div class="swiper-slide">
            <x-banner src="{{ asset('img/banner.png') }}">
                <x-slot:title>{{ __('messages.wholesale') }}</x-slot>
                {{ __('messages.wholesale_text') }}
                <x-slot:button>{{ __('messages.see_more') }}</x-slot:button>
            </x-banner>
        </div>
        <div class="swiper-slide">
            <x-banner src="{{ asset('img/banner.png') }}">
                <x-slot:title>{{ __('messages.instalations') }}</x-slot>
                {{ __('messages.instalations_text') }}
                <x-slot:button>{{ __('messages.see_more') }}</x-slot:button>
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

    <!-- SWIPER SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        autoplay: {
            delay: 5000,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        });
    </script>
    <section class="offer__section">
        <x-heading>
            <x-slot:subtitle>Co potrafimy zrobić?</x-slot>
            Nasza Oferta
        </x-heading>
        <div class="offer__gallery">
            <div class="offer__card slideIn">
                <a href="#">
                    <img src="{{ asset('img/offer_image.png') }}" alt="offer">
                    <div class="offer__text">
                        <h4>Instalacje Teletechniczne</h3>
                        <p>(instalacje niskoprądowe) w odróżnieniu od instalacji tzw. elektrycznych, działają na niskich napięciach prądu (np. 12V lub 24V).</p>
                    </div>
                </a>
            </div>
            <div class="offer__card slideIn">
                <a href="#">
                    <img src="{{ asset('img/offer_image.png') }}" alt="offer">
                    <div class="offer__text">
                        <h4>Instalacje Teletechniczne</h3>
                        <p>(instalacje niskoprądowe) w odróżnieniu od instalacji tzw. elektrycznych, działają na niskich napięciach prądu (np. 12V lub 24V).</p>
                    </div>
                </a>
            </div>
            <div class="offer__card slideIn">
                <a href="#">
                    <img src="{{ asset('img/offer_image.png') }}" alt="offer">
                    <div class="offer__text">
                        <h4>Instalacje Teletechniczne</h3>
                        <p>(instalacje niskoprądowe) w odróżnieniu od instalacji tzw. elektrycznych, działają na niskich napięciach prądu (np. 12V lub 24V).</p>
                    </div>
                </a>
            </div>
        </div>
        <button>Czytaj więcej</button>
    </section>
    <section class="realization">
        <x-heading>
            <x-slot:subtitle>Co już zrobiliśmy?</x-slot>
            Nasze Realizacje
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