import '../../resources/js/bootstrap';
import 'bootstrap';

var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    autoplay: {
        delay: 5000,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

var swiper2 = new Swiper(".mySwiper2", {
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: {
        delay: 3000
    },
    pagination: {
        el: ".swiper-pagination2",
        clickable: true,
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        }
    }
});


const elements = document.querySelectorAll(".offer__card");
const realizationElements = document.querySelectorAll(".realizations__item");
const referencesElements = document.querySelectorAll('.references__item');
const contactElements = document.querySelectorAll('.contact-item');

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("slideIn-visible");
            observer.unobserve(entry.target);
        }
    });
});

elements.forEach((element) => {
    observer.observe(element);
});

realizationElements.forEach((element) => {
    observer.observe(element);
});

referencesElements.forEach((element) => {
    observer.observe(element);
});

contactElements.forEach((element) => {
    observer.observe(element);
});

document.addEventListener("DOMContentLoaded", function () {
    const customSelect = document.querySelector('.custom-select');
    const selectedItem = customSelect.querySelector('.selected-item');
    const selectedImage = document.getElementById('selectedImage');
    const dropdownList = customSelect.querySelector('.dropdown-list');

    // Extract the current language from the URL path
    const pathParts = window.location.pathname.split('/');
    const currentLang = pathParts[1] || 'pl'; // Default to 'pl' if no language code is found

    // Set the selected image based on the current language
    const defaultOption = customSelect.querySelector(`.dropdown-item[data-value="${currentLang}"]`);
    
    if (defaultOption) {
        selectedImage.src = defaultOption.querySelector('img').src; // Set the selected flag image
    }

    // Toggle dropdown
    selectedItem.addEventListener('click', () => {
        customSelect.classList.toggle('active');
    });

    // Handle dropdown item click
    dropdownList.addEventListener('click', (e) => {
        const item = e.target.closest('.dropdown-item');
        if (item) {
            const imgSrc = item.querySelector('img').src;
            selectedImage.src = imgSrc; // Update selected image

            // Redirect to the selected language route
            window.location.href = item.getAttribute('href');
        }
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (e) => {
        if (!customSelect.contains(e.target)) {
            customSelect.classList.remove('active');
        }
    });
});

// Pobierz wszystkie obrazki z galerii i overlay
const galleryItems = document.querySelectorAll(".gallery-item img");
const overlay = document.getElementById("gallery-overlay");
const overlayImg = document.getElementById("overlay-img");
const closeBtn = document.querySelector(".close");
const prevArrow = document.querySelector(".prev-arrow");
const nextArrow = document.querySelector(".next-arrow");

let currentIndex = 0;

// Funkcja otwierająca overlay z wybranym obrazkiem
galleryItems.forEach((img, index) => {
    img.addEventListener("click", () => {
        overlay.style.display = "flex"; // Wyświetl overlay
        overlayImg.src = img.src; // Ustaw źródło klikniętego obrazka
        currentIndex = index; // Zapisz indeks klikniętego obrazka
    });
});

// Funkcja zamykająca overlay po kliknięciu "x"
closeBtn.addEventListener("click", () => {
    overlay.style.display = "none"; // Ukryj overlay
});

// Zamknięcie overlay po kliknięciu poza obrazek
overlay.addEventListener("click", (e) => {
    if (e.target !== overlayImg) {
        overlay.style.display = "none"; // Ukryj overlay
    }
});

// Funkcje nawigacji (poprzedni/następny)
const showImage = (index) => {
    if (index >= 0 && index < galleryItems.length) {
        overlayImg.src = galleryItems[index].src; // Zmień obrazek w overlay
        currentIndex = index; // Zaktualizuj bieżący indeks
    }
};

// Obsługa kliknięcia w strzałkę "poprzedni"
prevArrow.addEventListener("click", (e) => {
    e.stopPropagation(); // Zatrzymaj zdarzenie kliknięcia, aby nie zamykało overlay
    const newIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length; // Przejdź do poprzedniego obrazka
    showImage(newIndex);
});

// Obsługa kliknięcia w strzałkę "następny"
nextArrow.addEventListener("click", (e) => {
    e.stopPropagation(); // Zatrzymaj zdarzenie kliknięcia, aby nie zamykało overlay
    const newIndex = (currentIndex + 1) % galleryItems.length; // Przejdź do następnego obrazka
    showImage(newIndex);
});


document.addEventListener("DOMContentLoaded", () => {
    const galleryItems = document.querySelectorAll(
        ".certificates__gallery-item"
    );
    const fullscreenView = document.getElementById("fullscreenView");
    const fullscreenImage = document.getElementById("fullscreenImage");
    const closeView = document.getElementById("closeView");

    galleryItems.forEach((item) => {
        item.addEventListener("click", () => {
            const imgSrc = item.querySelector("img").src;
            fullscreenImage.src = imgSrc;
            fullscreenView.style.display = "flex";
            console.log("click");
        });
    });

    closeView.addEventListener("click", () => {
        fullscreenView.style.display = "none";
    });

    fullscreenView.addEventListener("click", (event) => {
        if (event.target === fullscreenView) {
            fullscreenView.style.display = "none";
        }
    });
});
