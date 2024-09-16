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

    <section class="offer__section home">
        <x-heading>
            <x-slot:subtitle>Co potrafimy zrobić?</x-slot>
            Nasza Oferta<span class="dot">.</span>
        </x-heading>
        <div class="offer__grid">
            <a href="/oferta/1" class="offer__card slideIn">
                <img src="{{ asset('img/offer_image.png') }}" alt="offer">
                <h3>Instalacje Teletechniczne</h3>
                <p>(instalacje niskoprądowe) w odróżnieniu od instalacji tzw. elektrycznych, działają na niskich napięciach prądu (np. 12V lub 24V).</p>
                <button>Sprawdź</button>
            </a>
            <a href="/oferta/1" class="offer__card slideIn">
                <img src="{{ asset('img/offer_image.png') }}" alt="offer">
                <h3>Instalacje Teletechniczne</h3>
                <p>(instalacje niskoprądowe) w odróżnieniu od instalacji tzw. elektrycznych, działają na niskich napięciach prądu (np. 12V lub 24V).</p>
                <button>Sprawdź</button>
            </a>
            <a href="/oferta/1" class="offer__card slideIn">
                <img src="{{ asset('img/offer_image.png') }}" alt="offer">
                <h3>Instalacje Teletechniczne</h3>
                <p>(instalacje niskoprądowe) w odróżnieniu od instalacji tzw. elektrycznych, działają na niskich napięciach prądu (np. 12V lub 24V).</p>
                <button>Sprawdź</button>
            </a>
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
        <div class="realizations__gallery__home">
            <a href="/realizacje/1" class="realizations__item slideIn">
                <img src="{{ asset('img/realization_example.jpg') }}" alt="image 1">
                <div class="overlay">Nazwa projektu</div>
            </a>
            <a href="/realizacje/1" class="realizations__item slideIn">
                <img src="{{ asset('img/realization_example.jpg') }}" alt="image 1">
                <div class="overlay">Nazwa projektu</div>
            </a>
            <a href="/realizacje/1" class="realizations__item slideIn">
                <img src="{{ asset('img/realization_example.jpg') }}" alt="image 1">
                <div class="overlay">Nazwa projektu</div>
            </a>
            <a href="/realizacje/1" class="realizations__item slideIn">
                <img src="{{ asset('img/realization_example.jpg') }}" alt="image 1">
                <div class="overlay">Nazwa projektu</div>
            </a>
            <a href="/realizacje/1" class="realizations__item slideIn">
                <img src="{{ asset('img/realization_example.jpg') }}" alt="image 1">
                <div class="overlay">Nazwa projektu</div>
            </a>
            <a href="/realizacje/1" class="realizations__item slideIn">
                <img src="{{ asset('img/realization_example.jpg') }}" alt="image 1">
                <div class="overlay">Nazwa projektu</div>
            </a>
            <div class="btn__container">
                <button>
                    <a href="/realizacje">Zobacz więcej</a>
                </button>
            </div>
        </div>
    </section>
    <section class="call__action">
        <div>
            <h2>Zadzwoń do nas i dowiedz się więcej!</h2>
            <a href="tel:+48511844001">+48 511 844 001</a>
        </div>
    </section>
    <section class="contact__form__section home">
        <x-heading>
            <x-slot:subtitle>Skontaktuj się z nami</x-slot>
            Wypełnij formularz<span class="dot">.</span>
        </x-heading>
        <form>
            <div class="form__container">
                <div>
                    <label for="name">Imię</label>
                    <input type="text" id="name" placeholder="Wpisz imię" required>
                </div>
                <div>
                    <label for="surname">Nazwisko</label>
                    <input type="text" id="surname" placeholder="Wpisz nazwisko" required>
                </div>
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" id="email" placeholder="Wpisz email" required>
                </div>
                <div>
                    <label for="phone">Numer telefonu</label>
                    <input type="tel" id="number" placeholder="Wpisz numer telefonu" required>
                </div>
                <div class="textarea__container">
                    <label for="content">Twoja wiadomość</label>
                    <textarea name="content" id="content" required placeholder="Wpisz treść wiadomości"></textarea>
                </div>
            </div>
            <div class="btn__container">
                <button type="submit">Wyślij</button>
            </div>
        </form>
    </section>
</x-layout>