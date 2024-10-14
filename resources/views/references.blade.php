<x-layout>
  <x-slot:title>{{ __("messages.our_references") }}</x-slot:title>
  <section class="container references">
    <x-heading>
        <x-slot:subtitle>{{ __("messages.who_recommends_us") }}</x-slot>
        {{ __("messages.our_references") }}<span class="dot">.</span>
    </x-heading>
    <div class="references__container">
      @foreach($references as $reference)
      <div class="references__item slideIn">
        <img src="{{ asset('storage/'.$reference->image) }}" alt="{{ $reference->getTranslatedAttribute('title', app()->getLocale(), 'pl') }}">
        <div class="content">
          <h4>{{ $reference->getTranslatedAttribute('title', app()->getLocale(), 'pl') }}</h4>
          <p>{{ $reference->getTranslatedAttribute('description', app()->getLocale(), 'pl') }}</p>
        </div>
      </div>
    @endforeach
    </div>
  </section>
</x-layout>
