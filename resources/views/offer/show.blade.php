<x-layout>
    <x-slot:title>Oferta</x-slot:title>
    <!-- <x-banner src="{{ asset('img/banner.png') }}">
        <x-slot:title>Instalacje elektryczne</x-slot>
    </x-banner> -->
    <div class="offer__banner__container">
        <img alt="banner" src="{{ asset('img/banner.png') }}" />
        <div class="banner__text">
                <ul class="custom__breadcumb">
                    <li>
                        <a href="/oferta">Oferta</a>
                    </li>
                    <li>
                        Instalacje elektryczne
                    </li>
                </ul>
            <h1>Instalacje elektryczne</h1>
        </div>
    </div>
    
    <section class="single__offer__section container">
    <div class="service__overview">
        <h4>Opis usługi</h4>
        <div class="line"></div>
        <p>Wykonujemy instalacje elektryczne w nowych budynkach przy inwestycjach deweloperskich, biurowcach, halach produkcyjnych jak i w mieszkaniach oraz domach jednorodzinnych.</p>
    </div>
    <div class="service__management">
        <h4>Zarządzanie projektem</h4>
        <div class="line"></div>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum nam quam delectus eaque officia neque voluptatum quas commodi! Nisi ab, excepturi ipsam amet earum totam? Ad vel tempore velit officia.
            Magni pariatur tenetur magnam nesciunt nostrum reiciendis aspernatur ex quia veritatis ut atque velit mollitia ratione voluptates praesentium, id fuga veniam aliquam doloremque eius eum nobis accusantium optio! Est, deserunt.
        </p>
    </div>
    <div class="service__why">
        <h4>Dlaczego powinieneś wybrać nas?</h4>
        <div class="line"></div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam ad quisquam quidem repudiandae. Nesciunt doloribus dolorum, earum blanditiis incidunt laboriosam dolore debitis possimus delectus, quia itaque suscipit repellendus atque illo.</p>
    </div>
    </section>
</x-layout>
