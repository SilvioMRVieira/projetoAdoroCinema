 let posicao = 1; // Posições: 1=1234, 2=2345, 3=3456, 4=4567, 5=5678, 6=6789
        const container = document.querySelector('.container-estreias');
        const estados = ['', 'show1234', 'show2345', 'show3456', 'show4567', 'show5678', 'show6789'];
        const maxPosicoes = 6;

        function mostrarSlides(pos) {
            container.className = 'container-estreias ' + estados[pos];
        }

        document.querySelector('.btn-next').onclick = function() {
            if (posicao < maxPosicoes) {
                posicao++;
                mostrarSlides(posicao);
            }
        }

        document.querySelector('.btn-prev').onclick = function() {
            if (posicao > 1) {
                posicao--;
                mostrarSlides(posicao);
            }
        }