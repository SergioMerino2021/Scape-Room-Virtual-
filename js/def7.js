window.addEventListener("load", inicio, true);

function inicio() {
    document.getElementById("mensaje").addEventListener("keyup", function() {
        this.value = this.value.toUpperCase();
    }, true);
    document.getElementById("cifrar").addEventListener("click", function() {
        let texto = document.getElementById("mensaje").value;
        let desplazamiento = document.getElementById("desplazamiento").value;
        document.getElementById("mensaje2").value = cifrar(texto, desplazamiento);
    }, true);
    document.getElementById("descifrar").addEventListener("click", function() {
        let texto = document.getElementById("mensaje").value;
        let desplazamiento = document.getElementById("desplazamiento").value;
        document.getElementById("mensaje2").value = descifrar(texto, desplazamiento);
    }, true);
}

function cifrar(texto, desplazamiento) {
    let resultado = "";
    let letras = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

    desplazamiento = (desplazamiento % 26 + 26) % 26;

    if (texto) {
        for (let i = 0; i < texto.length; i++) {
            if (letras.indexOf(texto[i]) != -1) {
                let posicion = ((letras.indexOf(texto[i]) + desplazamiento) % 26);
                resultado += letras[posicion];
            } else
                resultado += texto[i];
        }
    }
    return resultado
}

function descifrar(texto, desplazamiento) {
    if (!texto)
        return "";
    const letras = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    desplazamiento = (desplazamiento % 26 - 26) % 26;
    return texto.replace(/[A-Z]/ig, c => letras[(letras.indexOf(c) - desplazamiento) % 26]);
}

function protocolos() {
    var a = document.getElementById('msg-t').value

    if (a == 'REVISAD BIEN LA PAGINA') {
        return true
    } else {
        alert('FALLO DE LA RED')
        return false
    }
}

function protocolos_p() {
    var a = document.getElementById('user-t').value
    var b = document.getElementById('pass-t').value

    if (a == 'Sergio' && b == '13H436M7341004893548243') {
        return true
    } else {
        alert('FALLO EN LA REPARACION DEL HARDWARE')
        return false
    }
}