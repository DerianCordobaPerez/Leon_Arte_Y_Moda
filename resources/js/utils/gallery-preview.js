// Variables

const btnClose = document.querySelector('#btn-close');

const btnPrevious = document.querySelector('#btn-previous');

const btnNext = document.querySelector('#btn-next');

const images = document.querySelectorAll('.gallery__container--image img');

const lightbox = document.querySelector('#preview');

const imageActive = document.querySelector('#active-image');

let imageIndex = 0;

// lightbox

const openLightbox = (e) => {
    imageActive.src = e.target.src;
    lightbox.style.display = 'flex';
    imageIndex = Array.from(images).indexOf(e.target);
};

images.forEach((image) => {
    image.addEventListener('click', openLightbox);
});

// Cerrar lightbox

btnClose.addEventListener('click', () => {
    lightbox.style.display = 'none';
});

// Imagen Siguiente

const nextImage = () => {
    if (imageIndex === images.length - 1) {
        imageIndex = -1;
    }
    imageActive.src = images[imageIndex + 1].src;
    imageIndex++;
}

btnNext.addEventListener('click', nextImage);

// Imagen Anterior

const previousImage = () => {
    if (imageIndex === 0) {
        imageIndex = images.length;
    }

    imageActive.src = images[imageIndex - 1].src;
    imageIndex--;
}

btnPrevious.addEventListener('click', previousImage);
