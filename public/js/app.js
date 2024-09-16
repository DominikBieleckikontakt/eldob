const elements = document.querySelectorAll(".offer__card");

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
