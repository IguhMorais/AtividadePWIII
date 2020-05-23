<?php	
  //Eu dei mo role quase deixei um codigo desnecessario mas consegui eu acho
  //ia tentar fazer uns button com animação pros chats sumirem e aparecerem mas falta pouco pra 23:59
  // Obrigado pelo exercicio e pela atenção
  //continuarei tentando

  include('conexao.php');
	
	$moduloOne = 10;
	$modulotwo = 4;
	$moduloThree = 6;
	$agr = 2;
  
  $valorPwIII = 11;
  $valorBDIII = 21;
  $valorIP = 30;
  $valorPam = 8;


  $modulo = [];

  $stmt = $conn->prepare('SELECT * FROM tbLinha');
  $stmt->execute();
    $i=0;
    while ($row = $stmt->fetch(PDO :: FETCH_BOTH)) {
      $modulo[$i] = $row['conteudo'];
      $i++;
    }
    
    

?>

<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Modulo');
        data.addColumn('number', 'Prazer');
        data.addRows([
          ['MODULO I', <?php echo $moduloOne; ?>],
          ['MODULO II', <?php echo $modulotwo; ?>],
          ['MODULO III', <?php echo $moduloThree; ?>],
          ['Agora', <?php echo $agr; ?>],
          
        ]);

        // Set chart options
        var options = {'title':'Meu gosto no Curso de DS',
                       'width':400,
                       'height':200};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div_pie'));
        chart.draw(data, options);
      }

      
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
            data.addColumn('string', 'Turmas');
            data.addColumn('number', 'alunos');
            data.addRows([
                ['PAM II', <?php echo $valorPam; ?>,],
                ['PW III', <?php echo $valorPwIII; ?>,],
                ['BD III', <?php echo $valorBDIII; ?>],
                ['IP', <?php echo $valorIP; ?>],
                
            ]);

        var options = {
          chart: {
            title: 'Percentual de presença em DS',
            subtitle: 'Periodo:2020-pandemia',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('chart_div_bar'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {packages: ['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Modulos', 'BD', 'PW', 'APS/TP/QTS', 'LTT/Ingles/ETICA','IP/SSI', 'ROBOTICA', { role: 'annotation' } ],
        ['Modulo I', 20, 30, 10, 10, 0, 40, ''],
        ['Modulo II', 15, 25, 5, 30, 30,9, ''],
        ['Modulo III', 25, 19, 25, 1, 33, 0, '']
      ]);

      var options = {
        title:'Level de expectativa/Materia',
        width: 600,
        height: 400,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '85%' },
        isStacked: true,
      };

        var chart = new google.charts.Bar(document.getElementById('chart_div_coluna'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {packages: ['corechart', 'line']});
      google.charts.setOnLoadCallback(drawBasic);

      function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Eu');

      data.addRows([
        [0, <?php echo $modulo[0]; ?>],
        [1, <?php echo $modulo[1]; ?>],
        [2, <?php echo $modulo[2]; ?>],  
        [3, <?php echo $modulo[3]; ?>]      
      ]);

      var options = {
        title:'Minha vontade de continuar vivendo ao decorrer dos modulos',
        hAxis: {
          title: 'Modulo/Semestral'
        },
        vAxis: {
          title: 'escala 1:100'
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div_line'));

      chart.draw(data, options);
    }
</script>
  </head>

  <body>
    <div>
    <table class="columns">
      <tr>
        <td id="grafico1"><div id="chart_div_line" style="border: 1px solid #ccc"></div></td>

        <td id="grafico2"><div id="chart_div_bar" style="border: 1px solid #ccc"></div></td>
      </tr>
      <tr>
        <td id="grafico3"><div id="chart_div_coluna" style="border: 1px solid #ccc"></div></td>        
          
        <td id="grafico4"><div id="chart_div_pie" style="border: 1px solid #ccc"></div></td>

      </tr>
    </table>
    </div>
  </body>
</html>
