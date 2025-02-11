let index = 0;
const slides = document.querySelectorAll(".carousel img");
const totalSlides = slides.length;
const carousel = document.querySelector(".carousel");

function showSlide(i) {
    index = (i + totalSlides) % totalSlides;
    carousel.style.transform = `translateX(-${index * 100}%)`;
}

function nextSlide() {
    showSlide(index + 1);
}

function prevSlide() {
    showSlide(index - 1);
}

// Troca automática a cada 3 segundos
setInterval(nextSlide, 3000);
