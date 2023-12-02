
// Отримання всіх елементів
const slides = document.querySelectorAll('.carousel-slide');
const dots = document.querySelectorAll('.carousel-dot');

// Функція для встановлення активного слайду
function setActiveSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.transform = `translateX(-${index * 100}%)`; // Зсув на відстань одного слайду
    });

    dots.forEach((dot, i) => {
        if (i === index) {
            dot.classList.add('active');
        } else {
            dot.classList.remove('active');
        }
    });
}

// Початкове встановлення активного слайду
let currentIndex = 0;
setActiveSlide(currentIndex);

// Додайте обробники подій для кнопок
dots.forEach((dot, i) => {
    dot.addEventListener('click', () => {
        currentIndex = i;
        setActiveSlide(currentIndex);
    });
});

// Змініть значення currentIndex під час прокручування каруселі, якщо потрібно
// Наприклад, за допомогою scroll event на власний розсуд

const carousel = document.querySelector('.carousel');
const mc = new Hammer(carousel);

let currentIndexCarousel = 0;

// Функція для встановлення активного слайду
function setActiveSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.transform = `translateX(-${index * 100}%)`;
    });

    dots.forEach((dot, i) => {
        if (i === index) {
            dot.classList.add('active');
        } else {
            dot.classList.remove('active');
        }
    });
}

mc.on('swipeleft', () => {
    if (currentIndexCarousel < slides.length - 1) {
        currentIndexCarousel++;
        setActiveSlide(currentIndexCarousel);
    }
});

mc.on('swiperight', () => {
    if (currentIndexCarousel > 0) {
        currentIndexCarousel--;
        setActiveSlide(currentIndexCarousel);
    }
});

