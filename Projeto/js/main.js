const images = [
    { 'id': '1', 'url': './images/slider.jpg' },
    { 'id': '2', 'url': './images/slider2.jpg' },
    { 'id': '3', 'url': './images/slider3.jpg' },
]

const containerItems = document.querySelector('#slider');

const loadImages = (images, container) => {
    images.forEach(image => {
        container.innerHTML += `
        <div class='sliderImage' alt='Ilustração do slider'>
            <img src='${image.url}'>
        </div>  
        `
    })
}

loadImages(images, containerItems);

let items = document.querySelectorAll('.sliderImage');

const next = () => {
    containerItems.appendChild(items[0]);
    items = document.querySelectorAll('.sliderImage');

}

setInterval(next, 10000);

const previous = () => {
    const lastItem = items[items.length - 1];
    containerItems.insertBefore(lastItem, items[0]);
    items = document.querySelectorAll('.sliderImage');
}

const lista = document.querySelector('#listaQuantidade');

document.querySelector('#previous').addEventListener('click', previous);
document.querySelector('#next').addEventListener('click', next);