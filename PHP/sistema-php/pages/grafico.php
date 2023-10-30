<?php include 'cabecalho.php'?>
<?php include("../bd/conect.php")?>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

 
   
 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
 
      function drawChart() {
 
        var data = google.visualization.arrayToDataTable([
          ['Opções', 'Votos'],
          ['Ótimo', <?php Consultar("otimo")?>],
          ['Regular',<?php Consultar("regular")?>],
          ['Ruim',<?php Consultar("ruim")?>],
        ]);
 
        var options = {
          title: 'Gráfico de Satisfação de Atendimento',
          is3D: true,
        };
 
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
 
        chart.draw(data, options);
      }
    </script>
 
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
 
 
 
<?php include 'rodape.php'?>