const btnFilmes = document.querySelector('.btn_filmes');
  const modal = document.getElementById('modal');
  const conteudoModal = document.getElementById('conteudoModal');
  const modalConfirmacao = document.getElementById('modalConfirmacao');
  
  // Abrir modal do formulário
  btnFilmes.addEventListener('click', async () => {
    try {
      const response = await fetch('cadFilme.html');
      const html = await response.text();
      
      conteudoModal.innerHTML = html;
      modal.showModal();
      
      // Vincular o evento de submit do formulário
      setTimeout(() => {
        const formFilme = conteudoModal.querySelector('#formFilme');
        
        if (formFilme) {
          formFilme.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            // Pega os dados do formulário
            const formData = new FormData(formFilme);
            
            try {
              // Envia os dados para o PHP
              const response = await fetch('cadastrarFilme.php', {
                method: 'POST',
                body: formData
              });
              
              if (response.ok) {
                // Fecha o modal do formulário
                modal.close();
                
                // Abre o modal de confirmação (que já tem o conteúdo)
                modalConfirmacao.showModal();
              } else {
                alert('Erro ao cadastrar o filme!');
              }
              
            } catch (erro) {
              console.error('Erro ao cadastrar:', erro);
              alert('Erro ao cadastrar o filme!');
            }
          });
        }
      }, 100);
      
    } catch (erro) {
      console.error('Erro ao carregar o formulário:', erro);
    }
  });
  
  // Fechar modais
  document.getElementById('fecharModal').addEventListener('click', () => {
    modal.close();
  });
  
  document.getElementById('fecharModalConfirmacao').addEventListener('click', () => {
    modalConfirmacao.close();
    // Opcional: recarregar a página para atualizar a lista
    window.location.reload();
  });
  
  modal.addEventListener('click', (e) => {
    if (e.target === modal) modal.close();
  });
  
  modalConfirmacao.addEventListener('click', (e) => {
    if (e.target === modalConfirmacao) modalConfirmacao.close();
  });

        
        
        // const btnFilmes = document.querySelector('.btn_filmes');
        // const modal = document.getElementById('modal');
        // const conteudoModal = document.getElementById('conteudoModal');

        // btnFilmes.addEventListener('click', async () => {
        //     try {
        //         // Busca o conteúdo do arquivo cadFilme.html
        //         const response = await fetch('cadFilme.html');
        //         const html = await response.text();

        //         // Insere o conteúdo no modal
        //         conteudoModal.innerHTML = html;

        //         // Abre o modal
        //         modal.showModal();
        //     } catch (erro) {
        //         console.error('Erro ao carregar o formulário:', erro);
        //     }
        // });

        // // Fechar o modal
        // document.getElementById('fecharModal').addEventListener('click', () => {
        //     modal.close();
        // });

        // // Fechar ao clicar fora do modal
        // modal.addEventListener('click', (e) => {
        //     if (e.target === modal) {
        //         modal.close();
        //     }
        // });





// const button = document.querySelector("#btn")
// const modal = document.querySelector("#modal")
// const buttonClose = document.querySelector("#btnClose")

// button.onclick = function(){
//     modal.showModal()
// }
  
// buttonClose.onclick = function(){
//     modal.close()
// }