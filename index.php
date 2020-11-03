<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="scripts.js"></script>
</head>
<body>
    <form action="calcular.php" method="POST">
        <h3>Atividade 1</h3>
        <p>
        <label for="idade">Informe sua idade: </label>
        <input type="number" id="idade" name="idade" required>
        </p>
        <p>
        <button class="btn btn-primary" type="button" onclick="calcular()">Calcular</button>
        </p>
    </form>
   
    <div id="status"></div>

    <hr>

    <h3>Atividade 2</h3>
    <form action="calcularDois.php" method="POST">
        <p>
        <label for="impar">Informe um número: </label>
        <input type="number" id="impar" name="impar" required>
        </p>
        <p>
        <button class="btn btn-primary" type="submit">Calcular</button>
        </p>
    </form>

    <div id="resultado"></div>

    <hr>

    <h3>Atividade 3</h3>
<form action="" method="POST">
    <p>Escolha o seu sexo; </p>
    <ul id="nav">
    <li><a href="#" id="principal" name="principal">Escolha o seu sexo</a>
      <ul class="sub">
        <li><a href="#" id="masculino" onclick="masculino()">Masculino</a></li>
        <li><a href="#" id="feminino" onclick="feminino()">Feminino</a></li>
      </ul>
    </li>
  </ul>
  <br><br>
  <p>Escolha a sua altura; </p>
  <input type="number" id="altura" placeholder="Centímetros" required>
  <br><br>
  <button type="button" class="btn btn-primary" onclick="calcular2()">Calcular</button>
  <br><br>
  <p id="texto">"Resultado"</p>
</form>
    
<br><hr><br>

<h3>Atividade 4</h3>
<form action="regioes.php" method="POST">
<div class="btn-group dropright">
  <button type="button" class="btn btn-success dropdown-toggle regioes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Escolha uma região:
  </button>
  <div class="dropdown-menu">
    <button class="dropdown-item" type="submit" name="valor1">Norte</button>
    <button class="dropdown-item" type="submit" name="valor2">Nordeste</button>
    <button class="dropdown-item" type="submit" name="valor3">Noroeste</button>
    <button class="dropdown-item" type="submit" name="valor4">Leste</button>
    <button class="dropdown-item" type="submit" name="valor5">Oeste</button>
    <button class="dropdown-item" type="submit" name="valor6">Sudeste</button>
    <button class="dropdown-item" type="submit" name="valor7">Sudoeste</button>
    <button class="dropdown-item" type="submit" name="valor8">Sul</button>
  </div>
</div>
</form>
<hr>
<br>

<h3>Atividade 5</h3>
<p>Escolha três números:</p>
<form action="calcularTres.php" method="POST">
  <label for="n1"></label>
  <input type="number" id="n1" name="n1" required>
  <label for="n2"></label>
  <input type="number" id="n2" name="n2" required>
  <label for="n3"></label>
  <input type="number" id="n3" name="n3" required>

  <button type="submit" class="btn btn-primary" name="button">Calcular</button>
</form>
<br><hr><br>

<h3>Atividade 6</h3>
<p style="text-align: center;">Seja muito bem-vindo Mestre</p>
<p id="nome" style="text-align: center; font-size: 18px; color: green;"></p>
<div class="crud">
<button type="button" class="btn btn-primary" onclick="cadastrar()">Cadastrar usuário</button>
</div>
<div class="crud">
<button type="button" class="btn btn-primary" onclick="buscar()">Usuários cadastrados</button>
</div>
<a id="buscarResultado"></a>
<div class="crud">
<button type="button" class="btn btn-primary" onclick="alterar()">Alterar usuário</button>
</div>
<div class="crud">
<button type="button" class="btn btn-primary" onclick="deletar()">Deletar usuário</button>
</div>

<br><hr><br>

<h3>Atividade 7</h3>
<form action="ingressos.php" method="POST">
<div class="list-group regioes">
  <button type="button" class="list-group-item list-group-item-action active" disabled>
    Escolha a sua categoria:
  </button>
  <button type="submit" class="list-group-item list-group-item-action" name="estudante">Estudante</button>
  <button type="submit" class="list-group-item list-group-item-action" name="aposentado">Aposentado</button>
  <button type="submit" class="list-group-item list-group-item-action" name="demaisClientes">Demais clientes</button>
  <button type="button" class="list-group-item list-group-item-action" disabled>Obs: Desconto de 50% todas as Quartas-Feiras</button>
</div>
</form>

<br><hr><br>

<h3>Atividade 8</h3>
<form action="contar1.php" method="POST">
  <label for="contar1">Digite um número:</label>
  <input type="number" id="contar1" name="contar1" required>
  <button type="submit" class="btn btn-success" name="btnContar1">Contar</button>
</form>

<br><hr><br>

<h3>Atividade 9</h3>
<form action="contar2.php" method="POST">
  <button type="submit" class="btn btn-success" name="btnContar2">Contar</button>
</form>

<br><hr><br>

<h3>Atividade 10</h3>
  <button type="button" class="btn btn-success" onclick="iteracao()">Somar</button>
  <p id=resultadoIteracao class="regioes">Resultado</p>

  <br><hr><br>

  <h3>Atividade 11</h3>
  <form action="contarCaracteres.php" method="POST">
    <label for="caracter">Escreva uma palavra:</label>
    <input type="text" name="caracter" id="caracter"  required>
    <button type="submit" name="btnCaracter" class="btn btn-primary">Contar Caracteres</button>
  </form>

  <br><hr><br>

  <h3>Atividade 12</h3>
  <form action="multiplos.php" method="POST">
    <label for="caracter1">Escreva um número:</label>
    <input type="number" name="multiplo1" id="caracter1">
<br><br>
    <label for="caracter2">Escreva um número:</label>
    <input type="number" name="multiplo2" id="caracter2">
    <br><br>
    <label for="caracter3">Escreva um número:</label>
    <input type="number" name="multiplo3" id="caracter3">
    <br><br>
    <label for="caracter4">Escreva um número:</label>
    <input type="number" name="multiplo4" id="caracter4">
    <br><br>
    <label for="caracter5">Escreva um número:</label>
    <input type="number" name="multiplo5" id="caracter5">
    <br><br>
    <label for="caracter6">Escreva um número:</label>
    <input type="number" name="multiplo6" id="caracter6">
    <br><br>
    <label for="caracter7">Escreva um número:</label>
    <input type="number" name="multiplo7" id="caracter7">
    <br><br>
    <label for="caracter8">Escreva um número:</label>
    <input type="number" name="multiplo8" id="caracter8">
    <br><br>
    <label for="caracter9">Escreva um número:</label>
    <input type="number" name="multiplo9" id="caracter9">
    <br><br>
    <label for="caracter10">Escreva um número:</label>
    <input type="number" name="multiplo10" id="caracter10">
    <br><br>
    <button type="submit" name="btnMultiplo" class="btn btn-primary">Contar Caracteres</button>
  </form>

  <br><hr><br>

  <h3>Atividade 13</h3>
    <form action="atividade13.php" method="POST">
      <label for="a13">Digite um número: </label>
      <input type="number" id="a13" name="a13">
      <button type="submit" class="btn btn-success" name="btnA13">Calcular</button>
    </form>

    <br><hr><br>

    <h3>Atividade 14</h3>
    <form action="atividade14.php" method="POST">
      <p>Mostrar números pares menores que 50 em ordem decrescente</p>
      <button type="submit" class="btn btn-success" name="btnA14">Mostrar números</button>
    </form>

    <br><hr><br>

    <h3>Atividade 15</h3>
    <form action="a15.php" method="POST">
    <label for="caracter1">Número 1:</label>
    <input type="number" name="um" id="caracters1">
<br><br>
    <label for="caracters2">Número 2:</label>
    <input type="number" name="dois" id="caracters2">
    <br><br>
    <label for="caracters3">Número 3:</label>
    <input type="number" name="tres" id="caracters3">
    <br><br>
    <label for="caracters4">Número 4:</label>
    <input type="number" name="quatro" id="caracters4">
    <br><br>
    <label for="caracters5">Número 5:</label>
    <input type="number" name="cinco" id="caracters5">
    <br><br>
    <label for="caracters6">Número 6:</label>
    <input type="number" name="seis" id="caracters6">
    <br><br>
    <label for="caracters7">Número 7:</label>
    <input type="number" name="sete" id="caracters7">
    <br><br>
    <label for="caracters8">Número 8:</label>
    <input type="number" name="oito" id="caracters8">
    <br><br>
    <label for="caracters9">Número 9:</label>
    <input type="number" name="nove" id="caracters9">
    <br><br>
    <label for="caracters10">Número 10:</label>
    <input type="number" name="dez" id="caracters10">
    <br><br>
    <label for="caracters11">Número 11:</label>
    <input type="number" name="onze" id="caracters11">
    <br><br>
    <label for="caracters12">Número 12:</label>
    <input type="number" name="doze" id="caracters12">
    <br><br>
    <label for="caracters13">Número 13:</label>
    <input type="number" name="treze" id="caracters13">
    <br><br>
    <label for="caracters14">Número 14:</label>
    <input type="number" name="quatorze" id="caracters14">
    <br><br>
    <label for="caracters15">Número 15:</label>
    <input type="number" name="quinze" id="caracters15">
    <br><br>
    <label for="caracters16">Número 16:</label>
    <input type="number" name="dezesseis" id="caracters16">
    <br><br>
    <label for="caracters17">Número 17:</label>
    <input type="number" name="dezessete" id="caracters17">
    <br><br>
    <label for="caracters18">Número 18:</label>
    <input type="number" name="dezoito" id="caracters18">
    <br><br>
    <label for="caracters19">Número 19:</label>
    <input type="number" name="dezenove" id="caracters19">
    <br><br>
    <label for="caracters20">Número 20:</label>
    <input type="number" name="vinte" id="caracters20">
    <br><br>
    <button type="submit" name="btnA15" class="btn btn-primary">Contar Caracteres</button>
  </form>

  <br><hr><br>
  
    <h3>Atividade 16</h3>
    <form action="atividade16.php" method="POST">
      <p>Mostrar o quadrado de todos os números impares de 1 a 200:</p>
      <button type="submit" class="btn btn-success" name="btnA16">Calcular</button>
    </form>
    
    <br><hr><br>
  
    <h3>Atividade 17</h3>
    <form action="a17.php" method="POST">
      <p>Mostrar o menor e o maior número informado:</p>
      <label for="n1">Número 1:</label>
    <input type="number" name="n1" id="n1" required>
  <br><br>
    <label for="n2">Número 2:</label>
    <input type="number" name="n2" id="n2" required>
    <br><br>
    <label for="n3">Número 3:</label>
    <input type="number" name="n3" id="n3" required>
    <br><br>
    <label for="n4">Número 4:</label>
    <input type="number" name="n4" id="n4" required>
    <br><br>
    <label for="n5">Número 5:</label>
    <input type="number" name="n5" id="n5" required>
    <br><br>
    <label for="n6">Número 6:</label>
    <input type="number" name="n6" id="n6" required>
    <br><br>
    <label for="n7">Número 7:</label>
    <input type="number" name="n7" id="n7" required>
    <br><br>
    <label for="n8">Número 8:</label>
    <input type="number" name="n8" id="n8" required>
    <br><br>
    <label for="n9">Número 9:</label>
    <input type="number" name="n9" id="n9" required>
    <br><br>
    <label for="n10">Número 10:</label>
    <input type="number" name="n10" id="n10" required>
    <br><br>
    <button type="submit" class="btn btn-success" name="btnA17">Ver resultado</button>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>