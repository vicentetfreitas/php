<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Curso PHP</title>
</head>

<body>
  <header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Índice dos Exercícios</h2>
  </header>
  <main class="principal">
    <div class="conteudo">
      <div class="modulos">
        <div class="modulo roxo">
          <h3>4. Controle</h3>
          <ul>
            <li> <a href="exercicio.php?dir=controle&file=if_else">If Else</a></li>
            <li> <a href="exercicio.php?dir=controle&file=operadores_relacionais">Operadores Relacionais</a></li>
            <li> <a href="exercicio.php?dir=controle&file=desafio_pi">Desafio PI</a></a></li>
            <li> <a href="exercicio.php?dir=controle&file=operadores_logicos">Operadores Lógicos</a></a></li>
            <li> <a href="exercicio.php?dir=controle&file=desafio_operadores_logicos">Desafio operadores lógicos</a></a></li>
            <li> <a href="exercicio.php?dir=controle&file=operador_ternario">Operador ternário</a></a></li>
            <li> <a href="exercicio.php?dir=controle&file=switch">Switch</a></a></li>
          </ul>
        </div>
        <div class="modulo azul">
          <h3>3. Variáveis</h3>
          <ul>
            <li> <a href="exercicio.php?dir=variaveis&file=basico">Variáveis</a></li>
            <li> <a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio Equação</a></li>
            <li> <a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a></li>
            <li> <a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
            <li> <a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variáveis vairiáveis</a></li>
            <li> <a href="exercicio.php?dir=variaveis&file=desafio_variaveis">Desafio variáveis</a></li>
            <li> <a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor vs Referência</a></li>
            <li> <a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li>
          </ul>
        </div>
        <div class="modulo vermelho">
          <h3>2. Tipos</h3>
          <ul>
            <li> <a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
            <li> <a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
            <li> <a href="exercicio.php?dir=tipos&file=aritmeticas">Operações Aritméticas</a></li>
            <li> <a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedência</a></li>
            <li> <a href="exercicio.php?dir=tipos&file=string">Tipo String</a></li>
            <li> <a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</a></li>
            <li> <a href="exercicio.php?dir=tipos&file=booleano">Tipo Booleano</a></li>
            <li> <a href="exercicio.php?dir=tipos&file=conversoes">Conversões</a></li>
          </ul>
        </div>
        <div class="modulo verde">
          <h3>1. Básico</h3>
          <ul>
            <li> <a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
            <li> <a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
            <li> <a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
            <li> <a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
            <li> <a href="exercicio.php?dir=basico&file=desafio">Desafio PHP</a></li>
          </ul>
        </div>
        <div class="modulo laranja">
          <h3>Módulo 05</h3>
          <ul>
            <li> <a href="exercicio.php">Exercício A</a></li>
            <li> <a href="exercicio.php">Exercício B</a></li>
            <li> <a href="exercicio.php">Exercício C</a></li>
          </ul>
        </div>
        <div class="modulo verde-escuro">
          <h3>Módulo 06</h3>
          <ul>
            <li> <a href="exercicio.php">Exercício A</a></li>
            <li> <a href="exercicio.php">Exercício B</a></li>
            <li> <a href="exercicio.php">Exercício C</a></li>
          </ul>
        </div>
        <div class="modulo vermelho-escuro">
          <h3>Módulo 07</h3>
          <ul>
            <li> <a href="exercicio.php">Exercício A</a></li>
            <li> <a href="exercicio.php">Exercício B</a></li>
            <li> <a href="exercicio.php">Exercício C</a></li>
          </ul>
        </div>
        <div class="modulo azul-escuro">
          <h3>Módulo 08</h3>
          <ul>
            <li> <a href="exercicio.php">Exercício A</a></li>
            <li> <a href="exercicio.php">Exercício B</a></li>
            <li> <a href="exercicio.php">Exercício C</a></li>
          </ul>
        </div>
        <div class="modulo roxo-escuro">
          <h3>Módulo 09</h3>
          <ul>
            <li> <a href="exercicio.php">Exercício A</a></li>
            <li> <a href="exercicio.php">Exercício B</a></li>
            <li> <a href="exercicio.php">Exercício C</a></li>
          </ul>
        </div>
      </div>
    </div>
  </main>
  <footer class="rodape">
    VICENTE FREITAS &copy; <?= date('Y') ?>
  </footer>
</body>

</html>