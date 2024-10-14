<x-layout>
    <x-slot:title>{{ $realization->getTranslatedAttribute('title', app()->getLocale(), 'pl') }}</x-slot:title>
    <section class="single__realization container">
      <x-heading>
        <x-slot:subtitle>{{ __('messages.one_of_realization') }}</x-slot>
        {{ $realization->getTranslatedAttribute('title', app()->getLocale(), 'pl') }}<span class="dot">.</span>
      </x-heading>
      <div class="texts__grid">
        <div class="project__description">
          <h4>{{ __('messages.project_details') }}</h4>
          <div class="line"></div>
          <div class="d-flex">
            <p class="fw-bold text-black">{{ __('messages.client') }}: </p>
            <p class="ms-2"> {{ $realization->getTranslatedAttribute('client', app()->getLocale(), 'pl') }}</p>
          </div>
          <div class="d-flex">
            <p class="fw-bold text-black">{{ __('messages.place') }}: </p>
            <p class="ms-2"> {{ $realization->getTranslatedAttribute('place', app()->getLocale(), 'pl') }}</p>
          </div>
          <div class="d-flex">
            <p class="fw-bold text-black">{{ __('messages.start_date') }}: </p>
            <p class="ms-2">{{ $realization->start_date }}</p>
          </div>
          <div class="d-flex">
            <p class="fw-bold text-black">{{ __('messages.end_date') }}: </p>
            <p class="ms-2">{{ $realization->end_date }}</p>
          </div>
        </div>
        <div class="project__overview">
          <h4>{{ __('messages.project_description') }}</h4>
          <div class="line"></div>
          {!! $realization->getTranslatedAttribute('description', app()->getLocale(), 'pl') !!}
        </div>
        <div class="project__wishes">
          <h4>{{ __('messages.client_demands') }}</h4>
          <div class="line"></div>
          {!! $realization->getTranslatedAttribute('demands', app()->getLocale(), 'pl') !!}
        </div>
      </div>
      <div class="heading">
        <h1>{{ __('messages.project_gallery') }}<span class="dot">.</span></h2>
      </div>
      <div class="realization__gallery">
        @foreach($images as $image)
          <div class="gallery-item">
              <img src="{{ asset('storage/'.$image) }}">
          </div>
         @endforeach
          <!-- Powiększony obrazek -->
          <div id="gallery-overlay" class="gallery-overlay">
              <span class="close">&times;</span>
              <img class="overlay-img" id="overlay-img" src="{{ asset('img/realization_example.jpg') }}">
          </div>
      </div>


    </section>
</x-layout>
