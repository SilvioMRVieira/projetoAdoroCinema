let count = 1;

document.getElementById("slide1").checked = true;

setInterval(function() {
    nextImage();
},3000);

function nextImage() {
    count++
    if(count>3){
        count = 1;
    }
    document.getElementById("slide"+count).checked = true;
}

// let slideIndex = 0;
// const wrapper = document.getElementById('slider-wrapper');

// function showSlides() {
//   if (slideIndex > 2) { // Se for a terceira imagem (índice 2), volta ao início
//     slideIndex = 0;
//   }
//   wrapper.style.marginLeft = `-${slideIndex * 100}%`; // Avança para a próxima imagem
//   slideIndex++;
// }

// setInterval(showSlides, 3000); // Muda para o próximo slide a cada 3 segundos