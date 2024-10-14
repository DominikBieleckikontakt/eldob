<x-layout>
  <x-slot:title>Kontakt</x-slot:title>
  <section class="container contact">
    <x-heading>
        <x-slot:subtitle>{{ __('messages.how_to_contact') }}</x-slot>
        {{ __('messages.contact') }}<span class="dot">.</span>
    </x-heading>
    <div class="contact__container">
      <div class="contact-item slideIn">
          <img src="{{ asset('icons/map_icon.png') }}" alt="mapa">
          <p class="small-text">{{ __('messages.visit_us') }}</p>
          <p class="large-text">Ul. Mała 3, 43-400 Cieszyn</p>
      </div>
      <div class="contact-item slideIn">
          <img src="{{ asset('icons/mail_icon.png') }}" alt="Icon 2">
          <p class="small-text">{{ __('messages.write_to_us') }}</p>
          <p class="large-text">
            <a href="mailto:kontakt@eldob.pl">kontakt@eldob.pl</a>
          </p>
      </div>
      <div class="contact-item phone slideIn">
          <img src="{{ asset('icons/phone_icon.png') }}" alt="Icon 3">
          <p class="small-text">{{ __('messages.call_us') }}</p>
          <p class="large-text">            
            <a href="tel:+48511844001">
              +48 511-844-001
            </a>
          </p>
      </div>
    </div>
  </section>
  <section id="contact" class="contact__form__section home">
    <div>
      <x-heading>
          <x-slot:subtitle>{{ __('messages.fill_form') }}</x-slot>
          {{ __('messages.contact_us') }}<span class="dot">.</span>
      </x-heading>
    </div>
    
    <form action="{{ route('sendContact', ['lang' => app()->getLocale()]) }}#contact" method="post">
      @csrf
      
        <div class="form__container">
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
                <textarea name="message" id="message" required placeholder="{{ __('messages.provide_message') }}"></textarea>
            </div>
        </div>
        @if(session('success'))
          <p class="form__message success">
              {{ __("messages.message_sent_success") }}
          </p>
        @elseif(session('error'))
          <p class="form__message error">
              {{ __("messages.message_sent_error") }}
          </p>
        @endif
        <div class="btn__container">
            <button type="submit">{{ __('messages.send') }}</button>
        </div>
    </form>
  </section>
  <section class="map__section home">
    <x-heading>
      <x-slot:subtitle>{{ __('messages.where_we_are') }}</x-slot>
      {{ __('messages.find_us') }}<span class="dot">.</span>
    </x-heading>
   <div class="map">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2577.480114655723!2d18.640392111976272!3d49.7582251368446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471402648137d6dd%3A0xf7a9a3b8f11c786a!2sELDOB%20Sp.%20z%20o.o.!5e0!3m2!1spl!2spl!4v1726555350119!5m2!1spl!2spl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>
  </section>
</x-layout>
