function calcular() {
    formData = {
        'idade': $('#idade').val()
    };
    
    $.ajax({
        url: 'calcular.php',
        type: 'POST',
        data: formData,
        success: function (data) {
            $('#status').text(data)
        }
    });
}

function masculino() {
    var m = document.getElementById('masculino');
    var f = document.getElementById('feminino');
    var principal = document.getElementById('principal').innerHTML;
    m.style.backgroundColor = "white";

    if (principal == "Feminino") {
    document.getElementById('principal').innerHTML = "Feminino";
    f.innerHTML = "Masculino";
    m.innerHTML = "Feminino";
    } else if (principal == "Masculino") {
        document.getElementById('principal').innerHTML = "Masculino";
        f.innerHTML = "Feminino";
        m.innerHTML = "Masculino";
    } 
    else {
        document.getElementById('principal').innerHTML = "Masculino";
    }
    
}

function feminino() {
    var m = document.getElementById('feminino');
    var f = document.getElementById('masculino');
    var principal = document.getElementById('principal').innerHTML;
    f.style.backgroundColor = "white";

    if (principal == "Masculino") {
    document.getElementById('principal').innerHTML = "Feminino";
    f.innerHTML = "Feminino";
    m.innerHTML = "Masculino";
    } 
    else if(principal == "Feminino") {
    document.getElementById('principal').innerHTML = "Masculino";
    f.innerHTML = "Masculino";
    m.innerHTML = "Feminino";  
    } else {  
        document.getElementById('principal').innerHTML = "Feminino";
        f.innerHTML = "Feminino";
        m.innerHTML = "Masculino"
    }
}

function calcular2() {
    var principal = document.getElementById('principal').innerHTML;
    var altura = document.getElementById('altura').value;
    var moderador = altura / 100;
    var calcularM = (72.7 * moderador)-58;
    var calcularF = (62.1 * moderador)-44.7;

    if (principal == "Masculino") {
        document.getElementById('texto').innerHTML = calcularM;
    } else if (principal == "Feminino") {
        document.getElementById('texto').innerHTML = calcularF;
    } else {
        alert("Escolha um sexo!");
    }
}

var array = array();

function cadastrar() {
    document.getElementById('nome').innerHTML = dados;
    var prompt = prompt("Digite um nome de usuário: ");
    
    // array.push(prompt);
}

function buscar() {
    // document.getElementById('buscarResultado').innerHTML = array.push;
    nome = document.getElementById('nome').innerHTML;
    alert(nome);

}

function alterar() {

}

function deletar() {

}

function iteracao() {
    um = prompt("Digite um número(1):");
    dois = prompt("Digite um número(2):");
    tres = prompt("Digite um número(3):");
    quatro = prompt("Digite um número(4):");
    cinco = prompt("Digite um número(5):");

    conversao1 = parseInt(um);
    conversao2 = parseInt(dois);
    conversao3 = parseInt(tres);
    conversao4 = parseInt(quatro);
    conversao5 = parseInt(cinco);

    soma = conversao1 + conversao2 + conversao3 + conversao4 + conversao5;

    document.getElementById('resultadoIteracao').innerHTML = "Resultado: " + soma;
}