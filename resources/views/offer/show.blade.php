<x-layout>
    <x-slot:title
        >{{ $service->getTranslatedAttribute('name', app()->getLocale(), 'pl') }}</x-slot:title
    >
    <div class="offer__banner__container">
        <img alt="banner" src="{{ asset('img/banner.png') }}" />
        <div class="banner__text">
            <ul class="custom__breadcumb">
                <li>
                    <a
                        href="{{ route('offers', ['lang' => app()->getLocale()]) }}"
                        >Oferta</a
                    >
                </li>
                <li>
                    {{ $service->getTranslatedAttribute('name', app()->getLocale(), 'pl') }}
                </li>
            </ul>
            <h1>
                {{ $service->getTranslatedAttribute('name', app()->getLocale(), 'pl') }}
            </h1>
        </div>
    </div>

    <section class="single__offer__section container">
        <div class="service__overview">
            <h4>{{ __("messages.offer_overview") }}</h4>
            <div class="line"></div>
            <p>
                {!! $service->getTranslatedAttribute('description',
                app()->getLocale(), 'pl') !!}
            </p>
        </div>
    </section>
</x-layout>
