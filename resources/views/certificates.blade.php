<x-layout>
  <x-slot:title>Nasze certyfikaty</x-slot:title>
  <section class="container references">
    <x-heading>
        <x-slot:subtitle>Nasi Partnerzy</x-slot>
        I nasze Certyfikaty<span class="dot">.</span>
    </x-heading>
    <div class="certificates__gallery">
      <div class="certificates__gallery-item">
        <img src="{{ asset('img/certyfikat.png') }}" alt="certyfikat">
      </div>
    </div>
    <div class="fullscreen-view" id="fullscreenView">
      <span class="close" id="closeView">✖</span>
      <img id="fullscreenImage" src="" alt="Fullscreen Image">
  </div>
  <div id="gallery-overlay"></div>
  </section>
</x-layout>
