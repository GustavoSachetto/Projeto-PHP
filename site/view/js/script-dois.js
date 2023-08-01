// Botao navegação hamburguer
const botaoNav = document.getElementById('botaoNav');

botaoNav.addEventListener('click', function botaoNav() {
    
    const nav = document.getElementById('nav');
    const imagemBotao = document.getElementById('imagemBotao');

    nav.classList.toggle('ativo');
    if (nav.classList.contains('ativo')) {
        imagemBotao.src = '../img/menu-sair.png';
        document.body.style.overflow = 'hidden';
    } else {
        imagemBotao.src = '../img/menu.png';
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

// Observador entrada imagem na tela
const observadorImg = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('entrando-img');
        } 
    });    
});

const elementosImg = document.querySelectorAll('.entrada-img');

elementosImg.forEach(elemento => observadorImg.observe(elemento));

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

// Elementos da imagem "hover"
const myrela = document.querySelector('.myrela');
const p1 = document.getElementById('p1');

const sachetto = document.querySelector('.sachetto');
const p2 = document.getElementById('p2');

const kauany = document.querySelector('.kauany');
const p3 = document.getElementById('p3');

if (myrela && sachetto && kauany != null) {
    
    myrela.addEventListener('mouseenter', () => {
        myrela.classList.add('acionado');
        p1.style.background = '#c9dbf1';
    });
    
    myrela.addEventListener('mouseleave', () => {
        myrela.classList.remove('acionado');
        p1.style.background = 'none';
    });
    
    sachetto.addEventListener('mouseenter', () => {
        sachetto.classList.add('acionado');
        p2.style.background = '#c9dbf1';
    });
    
    sachetto.addEventListener('mouseleave', () => {
        sachetto.classList.remove('acionado');
        p2.style.background = 'none';
    });
    
    kauany.addEventListener('mouseenter', () => {
        kauany.classList.add('acionado');
        p3.style.background = '#c9dbf1';
    });
    
    kauany.addEventListener('mouseleave', () => {
        kauany.classList.remove('acionado');
        p3.style.background = 'none';
    });
    
}


