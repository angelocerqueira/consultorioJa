export default function initMenu() {
  const botaoAbrirMenu = document.querySelector('[data-menuClean="menu"]');
  const botaoFecharMenu = document.querySelector('[data-menu="fechar"]');
  const containerMenu = document.querySelector('[data-menu="container"]');
  // const modal = document.querySelector('[data-modal="modal"]');


  if(botaoAbrirMenu && botaoFecharMenu && containerMenu) {

    function toggleMenu(event) {
      event.preventDefault();
      containerMenu.classList.toggle('active');
    }
    function cliqueForaMenu(event) {
      if(event.target === this) {
        toggleMenu(event);
      }
    }

    // function cadastro(event){
    //   event.preventDefault();
    //   modal.classList.remove('active')
    //   modalCadastro.classList.add('active')
    // }


    // function colocarLogin(event){
    //   event.preventDefault();
    //   modal.classList.add('active')
    //   modalCadastro.classList.remove('active')
    // }


    botaoAbrirMenu.addEventListener('click', toggleMenu);
    botaoFecharMenu.addEventListener('click', toggleMenu);
    containerMenu.addEventListener('click', cliqueForaMenu);
  }
}

