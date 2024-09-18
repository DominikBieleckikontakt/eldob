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
    
    const customSelect = document.querySelector('.custom-select');
    const selectedItem = customSelect.querySelector('.selected-item');
    const selectedImage = document.getElementById('selectedImage');
    const selectedText = document.getElementById('selectedText');
    const dropdownList = customSelect.querySelector('.dropdown-list');
    const selectElement = document.getElementById('customSelect');

    // Set default value (e.g., first option)
    const defaultOption = customSelect.querySelector('.dropdown-item[data-value="1"]');
    const defaultImageSrc = defaultOption.querySelector('img').src;
    const defaultText = defaultOption.querySelector('span').textContent;
    selectedImage.src = defaultImageSrc;
    selectedText.textContent = defaultText;
    selectElement.value = defaultOption.getAttribute('data-value'); // Set hidden select default value

    // Toggle dropdown
    selectedItem.addEventListener('click', () => {
        customSelect.classList.toggle('active');
    });

    // Handle dropdown item click
    dropdownList.addEventListener('click', (e) => {
        if (e.target.closest('.dropdown-item')) {
            const item = e.target.closest('.dropdown-item');
            const value = item.getAttribute('data-value');
            const imgSrc = item.querySelector('img').src;
            const text = item.querySelector('span').textContent;

            selectedImage.src = imgSrc; // Update selected image
            selectedText.textContent = text; // Update selected text
            selectElement.value = value; // Update hidden select value
            customSelect.classList.remove('active'); // Close dropdown
        }
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (e) => {
        if (!customSelect.contains(e.target)) {
            customSelect.classList.remove('active');
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

$(document).ready(function() {
    function formatOption(option) {
        if (!option.id) return option.text; // No need to show the image if no ID
        
        var img = $(option.element).data('image');
        var optionText = '<img src="' + img + '" style="width: 20px; height: 20px; margin-right: 10px;" />' + option.text;
        return $(optionText);
    }

    $('#imageSelect').select2({
        templateResult: formatOption,
        templateSelection: formatOption
    });
});

// Pobierz wszystkie obrazki z galerii i overlay
const galleryItems = document.querySelectorAll(".gallery-item img");
const overlay = document.getElementById("gallery-overlay");
const overlayImg = document.getElementById("overlay-img");
const closeBtn = document.querySelector(".close");

// Funkcja otwierająca overlay z wybranym obrazkiem
galleryItems.forEach((img) => {
    img.addEventListener("click", () => {
        overlay.style.display = "flex"; // Wyświetl overlay
        overlayImg.src = img.src; // Ustaw źródło klikniętego obrazka
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
