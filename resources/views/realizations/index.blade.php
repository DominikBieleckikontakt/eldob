<x-layout>
    <x-slot:title>{{ __("messages.our_realizations") }}</x-slot:title>
    <section class="container">
        <x-heading>
            <x-slot:subtitle>{{ __("messages.what_we_did") }}</x-slot:subtitle>
            {{ __("messages.our_realizations") }}<span class="dot">.</span>
        </x-heading>
        <div class="realizations__gallery">
            @foreach($realizations as $realization)
            <a
                href="{{ route('realization', ['slug' => $realization->getTranslatedAttribute('slug', app()->getLocale()), 'lang' => app()->getLocale()]) }}"
                class="realizations__item slideIn"
            >
                <img
                    src="{{ asset('storage/'.$realization->image) }}"
                    alt="{{ $realization->getTranslatedAttribute('title', app()->getLocale(), 'pl') }}"
                />
                <div class="overlay">
                    {{ $realization->getTranslatedAttribute('title', app()->getLocale(), 'pl') }}
                </div>
            </a>
            @endforeach
        </div>
    </section>
</x-layout>
