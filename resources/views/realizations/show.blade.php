<x-layout>
    <x-slot:title>Realizacja</x-slot:title>
    <section class="single__realization container">
      <x-heading>
        <x-slot:subtitle>Jeden z naszych projektów</x-slot>
        Nazwa projektu<span class="dot">.</span>
      </x-heading>
      <div class="texts__grid">
        <div class="project__description">
          <h4>Opis projektu</h4>
          <div class="line"></div>
          <div class="d-flex">
            <p class="fw-bold text-black">Klient: </p>
            <p class="ms-2">Nazwa klienta</p>
          </div>
          <div class="d-flex">
            <p class="fw-bold text-black">Miejsce wykonania: </p>
            <p class="ms-2">Nazwa miejsca</p>
          </div>
          <div class="d-flex">
            <p class="fw-bold text-black">Początek projektu: </p>
            <p class="ms-2">13.09.2024</p>
          </div>
          <div class="d-flex">
            <p class="fw-bold text-black">Koniec projektu: </p>
            <p class="ms-2">14.09.2024</p>
          </div>
        </div>
        <div class="project__overview">
          <h4>Przebieg projektu</h4>
          <div class="line"></div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ipsam corporis qui nisi quae ab architecto adipisci, minima voluptas vitae! Officia rerum veniam, praesentium delectus sunt earum nihil quis sed? Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet eveniet dicta officiis nihil tempora sapiente perferendis molestias, odio maxime laboriosam, cum illo nam tenetur, harum nemo molestiae ab soluta sunt!</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, deserunt optio. Nostrum veniam voluptas vero incidunt cupiditate rem pariatur minima totam ab. Nihil assumenda cum reiciendis ut distinctio praesentium doloribus!</p>
        </div>
        <div class="project__wishes">
          <h4>Życzenia klienta</h4>
          <div class="line"></div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ipsam corporis qui nisi quae ab architecto adipisci, minima voluptas vitae! Officia rerum veniam, praesentium delectus sunt earum nihil quis sed? Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet eveniet dicta officiis nihil tempora sapiente perferendis molestias, odio maxime laboriosam, cum illo nam tenetur, harum nemo molestiae ab soluta sunt!</p>
        </div>
      </div>
      <div class="heading">
        <h1>Galeria projektu<span class="dot">.</span></h2>
      </div>
      <div class="realization__gallery">
          <div class="gallery-item">
              <img src="{{ asset('img/realization_example.jpg') }}" alt="Obrazek 1">
          </div>
          <div class="gallery-item">
              <img src="{{ asset('img/realization_example.jpg') }}" alt="Obrazek 2">
          </div>
          <div class="gallery-item">
              <img src="{{ asset('img/realization_example.jpg') }}" alt="Obrazek 3">
          </div>
          <div class="gallery-item">
              <img src="{{ asset('img/realization_example.jpg') }}" alt="Obrazek 4">
          </div>
          <div class="gallery-item">
              <img src="{{ asset('img/realization_example.jpg') }}" alt="Obrazek 5">
          </div>
          <!-- Powiększony obrazek -->
          <div id="gallery-overlay" class="gallery-overlay">
              <span class="close">&times;</span>
              <img class="overlay-img" id="overlay-img" src="{{ asset('img/realization_example.jpg') }}" alt="Powiększony obrazek">
          </div>
      </div>


    </section>
</x-layout>
