export default function initModal() {
  const botaoAbrir = document.querySelector('[data-modal="abrir"]');
  const botaoFechar = document.querySelector('[data-modal="fechar"]');
  const containerModal = document.querySelector('[data-modal="container"]');
  const modal = document.querySelector('[data-modal="modal"]');
  const modalCadastro = document.querySelector('[data-modal="modalCadastro"]');
  const abrirCadastro = document.querySelector('[data-modal="abrirCadastro"]');
  const fecharCadastro = document.querySelector('[data-modal="fecharCadastro"]');

  if(botaoAbrir && botaoFechar && containerModal) {

    function toggleModal(event) {
      event.preventDefault();
      containerModal.classList.toggle('ativo');
    }
    function cliqueForaModal(event) {
      if(event.target === this) {
        toggleModal(event);
      }
    }

    function cadastro(event){
      event.preventDefault();
      modal.classList.remove('ativo')
      modalCadastro.classList.add('ativo')
    }


    function colocarLogin(event){
      event.preventDefault();
      modal.classList.add('ativo')
      modalCadastro.classList.remove('ativo')
    }


    botaoAbrir.addEventListener('click', toggleModal);
    // botaoAbrirMobile.addEventListener('click', toggleModal);
    botaoFechar.addEventListener('click', toggleModal);
    abrirCadastro.addEventListener('click', cadastro);
    fecharCadastro.addEventListener('click',  colocarLogin);

    containerModal.addEventListener('click', cliqueForaModal);
  }
}

