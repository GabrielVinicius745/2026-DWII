<!-- 01_php-intro/sobre.php -->
 <?php
 $nome         ="Gabriel Vinicius da Silva";
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
      <h1> 👤 Sobre mim </h1>
      <p>Olá! Sou <strong><?php echo $nome; ?><strong>, estudante de Técnico em Informática no IFPR de Ponta Grossa.</p>
      <p> Sou natural de São Paulo - SP, mas passei a maior parte de minha vida no Paraná. Gosto de passar meu tempo aprendendo coisas novas, estudando e conversando com colegas.
      <a href="index.php"
      style="color: #4b579d; font-weight: bold;"> ⬅Voltar ao início</a>
   </div>

   <?php include 'includes/rodape.php'; ?>
 </body>
 </html>