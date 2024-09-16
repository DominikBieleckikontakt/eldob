<x-layout>
  <x-slot:title>Kontakt</x-slot:title>
  <section class="container contact">
    <x-heading>
        <x-slot:subtitle>Jak się z nami skontaktować?</x-slot>
        Kontakt<span class="dot">.</span>
    </x-heading>
    <div class="contact__container">
      <div class="contact-item">
          <img src="{{ asset('icons/map_icon.png') }}" alt="mapa">
          <p class="small-text">Odwiedź nas</p>
          <p class="large-text">Ul. Mała 3, 43-400 Cieszyn</p>
      </div>
      <div class="contact-item">
          <img src="{{ asset('icons/mail_icon.png') }}" alt="Icon 2">
          <p class="small-text">Napisz do nas</p>
          <p class="large-text">
            <a href="mailto:kontakt@eldob.pl">kontakt@eldob.pl</a>
            <a href="mailto:sprzedaz@eldob.pl">sprzedaz@eldob.pl</a>
          </p>
      </div>
      <div class="contact-item phone">
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
</x-layout>
