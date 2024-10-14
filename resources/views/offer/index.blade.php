<x-layout>
  <x-slot:title>{{ __('messages.our_offer') }}</x-slot:title>
  <section class="offer__section container">
    <x-heading>
        <x-slot:subtitle>{{ __('messages.what_we_can_do') }}</x-slot>
        {{ __('messages.our_offer') }}<span class="dot">.</span>
    </x-heading>
    <div class="offer__grid">
      @foreach($services as $service)
      <a href="{{ route('offer', ['slug' => $service->slug, 'lang' => app()->getLocale()]) }}" class="offer__card slideIn">
          <img src="{{ asset('storage/'.$service->image) }}" alt="{{ $service->getTranslatedAttribute('name', app()->getLocale(), 'pl') }}">
          <div class="offer__card__text">
            <div>
              <h3>{{ $service->getTranslatedAttribute('name', app()->getLocale(), 'pl') }}</h3>
              <p>{{ $service->getTranslatedAttribute('excerpt', app()->getLocale(), 'pl') }}</p>
            </div>
            <button>{{ __('messages.check_out') }}</button>
          </div>
      </a>
      @endforeach
  </div>
  </section>
</x-layout>
