let sliders = document.querySelectorAll('.project-container');

let currentSliderIndex = 0;
showSlider(currentSliderIndex);

function showSlider(index) {
    sliders.forEach(slider => slider.classList.remove('active'));
    sliders[index].classList.add('active');
    currentSliderIndex = index;
}

function nextSlide() {
    sliders[currentSliderIndex].classList.remove('active');
    currentSliderIndex = (currentSliderIndex + 1) % sliders.length;
    sliders[currentSliderIndex].classList.add('active');
}

function prevSlide() {
    sliders[currentSliderIndex].classList.remove('active');
    currentSliderIndex = (currentSliderIndex - 1 + sliders.length) % sliders.length;
    sliders[currentSliderIndex].classList.add('active');
}

document.querySelectorAll('.prev').forEach(button => {
    button.addEventListener('click', prevSlide);
});

document.querySelectorAll('.next').forEach(button => {
    button.addEventListener('click', nextSlide);
});