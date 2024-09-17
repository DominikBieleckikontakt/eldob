<x-layout>
  <x-slot:title>Kontakt</x-slot:title>
  <section class="container contact">
    <x-heading>
        <x-slot:subtitle>Jak się z nami skontaktować?</x-slot>
        Kontakt<span class="dot">.</span>
    </x-heading>
    <div class="contact__container">
      <div class="contact-item slideIn">
          <img src="{{ asset('icons/map_icon.png') }}" alt="mapa">
          <p class="small-text">Odwiedź nas</p>
          <p class="large-text">Ul. Mała 3, 43-400 Cieszyn</p>
      </div>
      <div class="contact-item slideIn">
          <img src="{{ asset('icons/mail_icon.png') }}" alt="Icon 2">
          <p class="small-text">Napisz do nas</p>
          <p class="large-text">
            <a href="mailto:kontakt@eldob.pl">kontakt@eldob.pl</a>
            <a href="mailto:sprzedaz@eldob.pl">sprzedaz@eldob.pl</a>
          </p>
      </div>
      <div class="contact-item phone slideIn">
          <img src="{{ asset('icons/phone_icon.png') }}" alt="Icon 3">
          <p class="small-text">Zadzwoń do nas</p>
          <p class="large-text">            
            <a href="tel:+48511844001">
              +48 511-844-001
            </a>
          </p>
      </div>
    </div>
  </section>
  <section class="contact__form__section home">
    <div>
      <x-heading>
          <x-slot:subtitle>Wypełnij formularz</x-slot>
          Skontaktuj się z nami<span class="dot">.</span>
      </x-heading>
    </div>
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
  <section class="map__section home">
    <x-heading>
      <x-slot:subtitle>Gdzie jesteśmy?</x-slot>
      Znajdź nas<span class="dot">.</span>
    </x-heading>
   <div class="map">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2577.480114655723!2d18.640392111976272!3d49.7582251368446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471402648137d6dd%3A0xf7a9a3b8f11c786a!2sELDOB%20Sp.%20z%20o.o.!5e0!3m2!1spl!2spl!4v1726555350119!5m2!1spl!2spl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>
  </section>
</x-layout>
