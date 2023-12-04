const sliderItems = document.querySelector(".slider-items");
const sliderImages = document.querySelectorAll(".slider-item");
const sliderButtonLeft = document.querySelector(".slider-button-left");
const sliderButtonRight = document.querySelector(".slider-button-right");
const sliderDotsContainer = document.querySelector(".slider-dots-container");
let currentIndex = 0;

for (let i = 0; i < sliderImages.length; i++) {
  const dot = document.createElement("div");
  dot.classList.add("slider-dot");
  if (i === currentIndex) {
    dot.classList.add("active");
  }
  sliderDotsContainer.appendChild(dot);
}
const sliderDots = document.querySelectorAll('.slider-dot');

// Функция для смены слайдов
function slideTo(index) {
  sliderItems.style.transform = `translateX(-${index * 100}%)`;
  sliderDots[currentIndex].classList.remove("active");
  sliderDots[index].classList.add("active");
  currentIndex = index;
}

// Обработчики событий для кнопок слайдера
sliderButtonLeft.addEventListener("click", () => {
  const newIndex =
    currentIndex === 0 ? sliderImages.length - 1 : currentIndex - 1;
  slideTo(newIndex);
});

sliderButtonRight.addEventListener("click", () => {
  const newIndex =
    currentIndex === sliderImages.length - 1 ? 0 : currentIndex + 1;
  slideTo(newIndex);
});

// Обработчики событий для точек слайдера
sliderDots.forEach((dot, index) => {
  dot.addEventListener("click", () => {
    slideTo(index);
  });
});
