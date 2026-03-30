<!-- 01_php-intro/sobre.php -->
<!-- 
  Disciplina : Desenvolvimento Web II (DWII)
  Aula       : 03 - Arquitetura Web e Introdução ao PHP
  Autor      : Gabriel Vinicius da Silva
  Data       : 09/03/2026
  Repositório: https://github.com/GabrielVinicius745/2026-DWII
-->
 <?php
 $nome         = "Gabriel Vinicius da Silva";
 $pagina_atual = "sobre";
 ?>
 <!DOCTYPE html>
 <html lang="pt-BR">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - <?php echo $nome; ?></title>
 </head>
 <body>
    <?php include 'includes/cabecalho.php'; ?>
    <div>
      <h1><?php echo "👤 Sobre mim"; ?></h1>
      <p>Olá! Me chamo <strong><?php echo $nome; ?><strong>, sou <?php echo $profissão; ?> no IFPR de Ponta Grossa.
         Entrei nesse curso pois sempre tive muito interesse em estudar tecnologia e planejo me graduar nessa área.
      </p>

      <p> Sou natural de São Paulo - SP, mas passei a maior parte de minha vida no Paraná.
         Gosto de passar meu tempo aprendendo coisas novas, estudando, tocando violão e conversando com colegas.
      </p>
      <a href="index.php"
      style="color: #4b579d; font-weight: bold;"> ⬅Voltar ao início</a>
   </div>

   <?php include 'includes/rodape.php'; ?>
 </body>
 </html>