// Botao navegação hamburguer
const botaoNav = document.getElementById('botaoNav');

botaoNav.addEventListener('click', function () {
    
    const nav = document.getElementById('nav');
    const imagemBotao = document.getElementById('imagemBotao');

    nav.classList.toggle('ativo');

    if (nav.classList.contains('ativo')) {
        imagemBotao.src = 'view/img/menu-sair.png';
        document.body.style.overflow = 'hidden';
    } else {
        imagemBotao.src = 'view/img/menu.png';
        document.body.style.overflow = 'auto';
    }
});

// Botao subir para o topo
const botaoTopo = document.getElementById('botaoTopo');

botaoTopo.addEventListener('click', function () { 
    window.scrollTo(0,0);
});

document.addEventListener('scroll', function () {
    if (window.scrollY > 30) {
        botaoTopo.style.display = 'flex';
    } else {
        botaoTopo.style.display = 'none';
    }
});


// Link animado para os exercicios do inicio
const exemplo1 = document.getElementById('exemplo1');

const veja1 = document.getElementById('veja1');

const ex1 = document.getElementById('ex1');

exemplo1.addEventListener('mouseenter', () => {
    veja1.style.visibility = 'visible';
    ex1.style.opacity = '30%';
});

exemplo1.addEventListener('mouseleave', () => {
    veja1.style.visibility = 'hidden';
    ex1.style.opacity = '100%';
});

const exemplo2 = document.getElementById('exemplo2');

const veja2 = document.getElementById('veja2');

const ex2 = document.getElementById('ex2');

exemplo2.addEventListener('mouseenter', () => {
    veja2.style.visibility = 'visible';
    ex2.style.opacity = '30%';
});

exemplo2.addEventListener('mouseleave', () => {
    veja2.style.visibility = 'hidden';
    ex2.style.opacity = '100%';
});