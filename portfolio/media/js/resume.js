
// Slider resume

let sliders = document.querySelectorAll('.resume-slider');
let currentSliderIndex = 0;
showSlider(currentSliderIndex);

function showSlider(index) {
    sliders.forEach(slider => slider.classList.remove('active'));
    sliders[index].classList.add('active');
    currentSliderIndex = index;
}

function nextSlide() {
    currentSliderIndex = (currentSliderIndex + 1) % sliders.length;
    showSlider(currentSliderIndex);
}

function prevSlide() {
    currentSliderIndex = (currentSliderIndex - 1 + sliders.length) % sliders.length;
    showSlider(currentSliderIndex);
}

document.querySelectorAll('.prev').forEach(button => {
    button.addEventListener('click', prevSlide);
});

document.querySelectorAll('.next').forEach(button => {
    button.addEventListener('click', nextSlide);
});

let slideEnabled = true;

function enableSlide() {
    slideEnabled = true;
}

function dragRight() {
    if (window.innerWidth <= 460 && slideEnabled) {
        prevSlide();
        slideEnabled = false;
        setTimeout(enableSlide, 1000);
    }
}

function dragLeft() {
    if (window.innerWidth <= 460 && slideEnabled) {
        nextSlide();
        slideEnabled = false;
        setTimeout(enableSlide, 1000);
    }
}

document.addEventListener('mousedown', function(event) {
    const startX = event.clientX;

    function handleMouseMove(event) {
        if (event.clientX < startX) {
            dragLeft();
        } else if (event.clientX > startX) {
            dragRight();
        }
    }

    document.addEventListener('mousemove', handleMouseMove);

    document.addEventListener('mouseup', function() {
        document.removeEventListener('mousemove', handleMouseMove);
    }, { once: true });
});
