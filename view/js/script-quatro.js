// Texto digita sozinho Index
const elementoIndex = document.getElementById('text-index');
const textoIndex = "Sobre o que se trata esse site?";

if (elementoIndex != null) {

    function trocandoTexto(elementoIndex, textoIndex) {
    
        const caracters = textoIndex.split("").reverse();

        const digitando = setInterval(() => {
        
            if (!caracters.length) {
                return clearInterval(digitando);
            }

            const proxima = caracters.pop();

            elementoIndex.innerHTML += (proxima);

        }, 120);

    }

    trocandoTexto(elementoIndex, textoIndex);

}

// Texto digita sozinho Integrantes
const elementoIntegrantes = document.getElementById('text-integrantes');
const textoIntegrantes = "Quem nós somos?";

if (elementoIntegrantes != null) {
    
    function trocandoTexto(elementoIntegrantes, textoIntegrantes) {
    
        const caracters = textoIntegrantes.split("").reverse();

        const digitando = setInterval(() => {
        
            if (!caracters.length) {
                return clearInterval(digitando);
            }

            const proxima = caracters.pop();

            elementoIntegrantes.innerHTML += (proxima);

        }, 120);

    }

    trocandoTexto(elementoIntegrantes, textoIntegrantes);

}

// Texto digita sozinho Pesquisa
const elementoPesquisa = document.getElementById('text-pesquisa');
const textoPesquisa = "Você sabe pra que serve php?";

if (elementoPesquisa != null) {
    
    function trocandoTexto(elementoPesquisa, textoPesquisa) {
    
        const caracters = textoPesquisa.split("").reverse();

        const digitando = setInterval(() => {
        
            if (!caracters.length) {
                return clearInterval(digitando);
            }

            const proxima = caracters.pop();

            elementoPesquisa.innerHTML += (proxima);

        }, 120);

    }

    trocandoTexto(elementoPesquisa, textoPesquisa);

}

