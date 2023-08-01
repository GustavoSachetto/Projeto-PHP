// Botao navegação hamburguer
const botaoNav = document.getElementById('botaoNav');

botaoNav.addEventListener('click', function botaoNav() {
    
    const nav = document.getElementById('nav');
    const imagemBotao = document.getElementById('imagemBotao');

    nav.classList.toggle('ativo');

    if (nav.classList.contains('ativo')) {
        imagemBotao.src = '../../img/menu-sair.png';
        document.body.style.overflow = 'hidden';
    } else {
        imagemBotao.src = '../../img/menu.png';
        document.body.style.overflow = 'auto';
    }
});

// Botao subir para o topo
const botaoTopo = document.getElementById('botaoTopo');

botaoTopo.addEventListener('click', function voltandoTopo() {
    window.scrollTo(0,0);
});

document.addEventListener('scroll', function verificandoScroll() {
    if (window.scrollY > 30) {
        botaoTopo.style.display = 'flex';
    } else {
        botaoTopo.style.display = 'none';   
    }    
});

// Observador entrada texto na tela
const observadorTxt = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
       if (entry.isIntersecting) {
           entry.target.classList.add('entrando-txt');
       } 
    });
});

const elementosTxt = document.querySelectorAll('.entrada-txt');

elementosTxt.forEach(elemento => observadorTxt.observe(elemento));