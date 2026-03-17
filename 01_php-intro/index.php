<!-- 01_php-intro/index.php -->
<!-- 
  Disciplina : Desenvolvimento Web II (DWII)
  Aula       : 03 - Arquitetura Web e Introdução ao PHP
  Autor      : Gabriel Vinicius da Silva
  Data       : 09/03/2026
  Repositório: https://github.com/GabrielVinicius745/2026-DWII
-->
<?php
// Variáveis PHP - serão usadas no HTML abaixo
$nome      = "Gabriel Vinicius da Silva";
$profissão = "Estudante de Tecnologia";
$curso     = "Técnico em Informática - IFPR";
$pagina_atual   = "inicio";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio - <?php echo $nome; ?></title>
    <link rel="stylesheet" href="index.css">
</head>

<body>


    <?php include 'includes/cabecalho.php'; ?>

    <div class="hero">
        <h1><?php echo $nome; ?></h1>
        <p><?php echo $profissao; ?> | <?php echo $curso; ?></p>
    </div>


    <div class="container">
        <h2>Bem-vindo ao meu portfólio</h2>
        <p>Esta página foi gerada pelo PHP em:
            <strong><?php echo date("d/m/Y \à\s H:i:s"); ?></strong></p>
    </div>

<?php include 'includes/rodape.php'; ?>

</body>
</html>