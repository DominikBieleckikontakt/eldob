<x-layout>
    <x-slot:title>{{ __('messages.homepage') }}</x-slot:title>  
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach($slides as $slide)
                <div class="swiper-slide">
                    <x-banner src="{{ asset('img/banner.png') }}">
                        <x-slot:title>{{ $slide->getTranslatedAttribute('title', app()->getLocale()) }}</x-slot:title>
                        {{ $slide->getTranslatedAttribute('text', app()->getLocale()) }}
                        <a href="{{ $slide->getTranslatedAttribute('button_link', app()->getLocale()) }}">{{ $slide->getTranslatedAttribute('button_text', app()->getLocale()) }}</a>
                    </x-banner>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <section class="offer__section home">
        <x-heading>
            <x-slot:subtitle>{{ __('messages.what_we_can_do') }}</x-slot>
            {{ __('messages.our_offer') }}<span class="dot">.</span>
        </x-heading>
        <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
                @foreach($services as $service)
                <a href="{{ route('offer', ['slug' => $service->getTranslatedAttribute('slug', app()->getLocale()), 'lang' => app()->getLocale()]) }}" class="offer__card swiper-slide slideIn">
                    <img src="{{ asset('img/offer_image.png') }}" alt="offer">
                    <h3>{{ $service->getTranslatedAttribute('name', app()->getLocale(), 'pl') }}</h3>
                    <p>{{ $service->getTranslatedAttribute('excerpt', app()->getLocale(), 'pl') }}</p>
                    <button>{{ __('messages.check_out') }}</button>
                </a>
                @endforeach
            </div>
        </div>
        <div class="btn__container">
            <button>
                <a href="{{ route('offers', ['lang' => app()->getLocale()]) }}">{{ __('messages.read_more') }}</a>
            </button>
        </div>
    </section>
    
    <section class="realization">
        <x-heading>
            <x-slot:subtitle>{{ __('messages.what_we_did') }}</x-slot>
            {{ __('messages.our_realizations') }}<span class="dot">.</span>
        </x-heading>
        <div class="realizations__gallery__home">
            @foreach($realizations as $realization)
            <a href="{{ route('realization', ['slug' => $realization->getTranslatedAttribute('slug', app()->getLocale()), 'lang' => app()->getLocale()]) }}" class="realizations__item slideIn">
                <img src="{{ asset('img/realization_example.jpg') }}" alt="{{ $realization->getTranslatedAttribute('title', app()->getLocale(), 'pl') }}">
                <div class="overlay">{{ $realization->getTranslatedAttribute('title', app()->getLocale(), 'pl') }}</div>
            </a>
            @endforeach
            <div class="btn__container">
                <button>
                    <a href="{{ route('realizations', ['lang' => app()->getLocale()]) }}">{{ __('messages.read_more') }}</a>
                </button>
            </div>
        </div>
    </section>
    <section class="call__action">
        <div>
            <h2>{{ __('messages.find_out_more') }}</h2>
            <a href="tel:+48511844001">+48 511 844 001</a>
        </div>
    </section>
    <section id="contact" class="contact__form__section home">
        <x-heading>
            <x-slot:subtitle>{{ __('messages.fill_form') }}</x-slot>
            {{ __('messages.contact_us') }}<span class="dot">.</span>
        </x-heading>
        <form action="{{ route('sendContact', ['lang' => app()->getLocale()]) }}#contact" method="post">
            @csrf
            <div class="form__container">
                 @if(session('success'))
          <!-- Ostylowac komunikaty -->
            <p>
                {{ __("messages.message_sent_success") }}
            </p>
            @elseif(session('error'))
            <p>
                {{ __("messages.message_sent_error") }}
            </p>
            @endif
                <div>
                    <label for="first_name">{{ __('messages.first_name') }}</label>
                    <input type="text" id="first_name" name="first_name" placeholder="{{ __('messages.provide_first_name') }}" required>
                </div>
                <div>
                    <label for="last_name">{{ __('messages.last_name') }}</label>
                    <input type="text" id="last_name" name="last_name" placeholder="{{ __('messages.provide_last_name') }}" required>
                </div>
                <div>
                    <label for="email">{{ __('messages.email') }}</label>
                    <input type="email" id="email" name="email" placeholder="{{ __('messages.provide_email') }}" required>
                </div>
                <div>
                    <label for="phone">{{ __('messages.phone') }}</label>
                    <input type="tel" id="phone" name="phone" placeholder="{{ __('messages.provide_phone') }}" required>
                </div>
                <div class="textarea__container">
                    <label for="message">{{ __('messages.message') }}</label>
                    <textarea id="message" name="message" required placeholder="{{ __('messages.provide_message') }}"></textarea>
                </div>
            </div>
            <div class="btn__container">
                <button type="submit">{{ __('messages.send') }}</button>
            </div>
        </form>
    </section>
</x-layout>