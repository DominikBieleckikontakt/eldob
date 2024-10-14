<x-layout>
  <x-slot:title>{{ $page->getTranslatedAttribute('title', app()->getLocale(), 'pl') }}</x-slot:title>
  <section class="container sale">
    <x-heading>
        <x-slot:subtitle></x-slot>
        {{ $page->getTranslatedAttribute('title', app()->getLocale(), 'pl') }}<span class="dot">.</span>
    </x-heading>
    {!! $page->getTranslatedAttribute('content', app()->getLocale(), 'pl') !!}
  </section>
</x-layout>
