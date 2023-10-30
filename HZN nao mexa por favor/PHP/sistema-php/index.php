    <?php include 'pages/cabecalho.php'?>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="container-fluid">
        <h2>SISTEMA DE SATISFAÇÃO DE ATENDIMENTO</h2>
    </header>

    <main class="container-fluid">
        <section class="row sec-conteudo">
            <div class="col-sm-4 div-item">
                <a href="pages/agradecimento.php?acao=otimo"><img src="img/otimo.jpg" class="img-react"></a>
                <h2>Ótimo</h2>
            </div>
            <div class="col-sm-4 div-item">
                <a href="pages/agradecimento.php?acao=regular"><img src="img/regular.jpg" class="img-react"></a>
                <h2>Regular</h2>
            </div>
            <div class="col-sm-4 div-item">
                <a href="pages/agradecimento.php?acao=ruim"><img src="img/ruim.jpg" class="img-react"></a>
                <h2>Ruim</h2>
            </div>
        </section>
    </main>


    <?php include 'pages/rodape.php'?>
