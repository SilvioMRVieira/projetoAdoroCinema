
//menu dropdown com clique alterar o conteudo do botão

const botao = document.getElementById('botao');
const original = botao.textContent;

botao.addEventListener('click', function () {

  if (botao.textContent === original) { // 4. Verifica se o texto é o original
      botao.textContent = 'x'; // Se sim, altera o texto
    } else {
      botao.textContent = original; // Senão, retorna ao texto original
    }
  });





let count = 1;

document.getElementById("slide1").checked = true;

setInterval(function () {
  nextImage();
}, 2000);

function nextImage() {
  count++
  if (count > 3) {
    count = 1;
  }
  document.getElementById("slide" + count).checked = true;
}

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}






