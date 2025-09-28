// VARIÁVEIS GLOBAIS
let currentPosition = 0;
const totalSlides = 4;
const slidesVisible = 3;
const maxPosition = totalSlides - slidesVisible; // 3 (posições: 0,1,2,3)

console.log('Carrossel iniciado!');
console.log('Total slides:', totalSlides);
console.log('Slides visíveis:', slidesVisible);
console.log('Posições possíveis:', maxPosition + 1);

// FUNÇÃO PRINCIPAL - MOVE O CARROSSEL
function updateCarousel() {
    const carousel = document.getElementById('carousel');
    const slideWidth = 100 / slidesVisible; // 33.33%
    const moveDistance = currentPosition * slideWidth;

    carousel.style.transform = `translateX(-${moveDistance}%)`;

    // Atualizar debug
    document.getElementById('debugInfo').innerHTML =
        `Posição atual: ${currentPosition} | Movendo: -${moveDistance.toFixed(1)}% | Max posição: ${maxPosition}`;

    console.log(`Moveu para posição ${currentPosition} (${-moveDistance.toFixed(1)}%)`);
}

// NAVEGAÇÃO COM SETAS
function moveCarousel(direction) {
    console.log('Tentando mover:', direction);

    currentPosition += direction;

    // Verificar limites
    if (currentPosition > maxPosition) {
        currentPosition = 0; // Volta pro início
        console.log('Chegou no fim, voltando pro início');
    } else if (currentPosition < 0) {
        currentPosition = maxPosition; // Vai pro final
        console.log('Chegou no início, indo pro final');
    }

    updateCarousel();
}

// NAVEGAÇÃO DIRETA
function goToPosition(position) {
    console.log('Indo direto para posição:', position);

    if (position >= 0 && position <= maxPosition) {
        currentPosition = position;
        updateCarousel();
    } else {
        console.log('Posição inválida:', position);
    }
}

// INICIALIZAR
updateCarousel();
console.log('Carrossel pronto para usar!');

function updateArrows() {
    // Início: desabilita seta esquerda
    if (currentPosition === 0) {
        arrowLeft.classList.add('disabled');
    }

    // Final: desabilita seta direita  
    if (currentPosition === maxPosition) {
        arrowRight.classList.add('disabled');
    }
}

// Bloqueia movimento se estiver no limite
// if (direction === -1 && currentPosition === 0) return;
// if (direction === 1 && currentPosition === maxPosition) return;