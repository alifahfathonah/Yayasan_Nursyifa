const cardSlider = document.querySelector(".card-slider");
const cards = document.querySelectorAll(".card");

let currentIndex = 0;
const cardWidth = cards[0].offsetWidth;
const numCards = cards.length;

function showCard(index) {
    if (index < 0) {
        index = numCards - 1;
    } else if (index >= numCards) {
        index = 0;
    }
    cardSlider.style.transform = `translateX(-${index * cardWidth}px)`;
    currentIndex = index;
}

document.querySelector(".prev-button").addEventListener("click", () => {
    showCard(currentIndex - 1);
});

document.querySelector(".next-button").addEventListener("click", () => {
    showCard(currentIndex + 1);
});

showCard(currentIndex);