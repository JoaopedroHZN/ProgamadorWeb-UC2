<?php include 'cabecalho.php'?>
<?php include ("../bd/conect.php") ?>

<?php

    $opcao = $_GET["acao"];

    Inserir($opcao);

    header("Refresh: 5; url=../index.php")

?>

<link rel="stylesheet" href="../css/style1.css">
<link rel="stylesheet" href="../css/style.css">

<section class="obg">
    <h1>Obrigado por avaliar!!!</h1>
    <div class="spinner-border"></div>
</section>

<?php include 'rodape.php'?>