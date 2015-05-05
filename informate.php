<!doctype html>
<?php require_once 'twitter/init.php';?>
<html>
<head>
	<!-- Titulo de la página -->
	<title>¡Infórmate!</title>
	<meta charset="utf-8">
	<!-- Declaracion para mejor visualización y zoom en dispositivos móviles -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Documentos de bootsrap -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<!-- Archivos para las graficas -->
	<script type="text/javascript" src="js/TableBarChart.js"></script>
	<link rel="stylesheet" href="css/tables.css" />
	<!-- estilos para lo demás -->
	<link rel="stylesheet" href="css/everythingElse.css" />
</head>
<body>
	<div id="graficas">
				<table id="source">
					<caption>
						Presidente Municipal
					</caption>
					<thead>
						<tr>
							<th></th>
							<th>Votos registrados para presidente municipal</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Marcos Aguilar Vega</th>
							<td><?php if($result = $db->query("SELECT votos FROM municipal WHERE last = 'aguilar'")){
										$row = mysqli_fetch_array($result);
										}else{
											echo -1;
										}; echo $row['votos'];?> </td>
						</tr>
						<tr>
							<th>Manuel Pozo Cabrera</th>
							<td><?php if($result = $db->query("SELECT votos FROM municipal WHERE last = 'pozo'")){
										$row = mysqli_fetch_array($result);
										}else{
											echo -1;
										}; echo $row['votos'];?> </td>
						</tr>
						<tr>
							<th>Gonzalo Bárcenas Reyes</th>
							<td><?php if($result = $db->query("SELECT votos FROM municipal WHERE last = 'barcenas'")){
										$row = mysqli_fetch_array($result);
										}else{
											echo -1;
										}; echo $row['votos'];?> </td>
						</tr>
						<tr>
							<th>Cristina Berenice García Vega</th>
							<td><?php if($result = $db->query("SELECT votos FROM municipal WHERE last = 'garcia'")){
										$row = mysqli_fetch_array($result);
										}else{
											echo -1;
										}; echo $row['votos'];?> </td>
						</tr>
						<tr>
							<th>Ángel Eduardo Simón Miranda Correa</th>
							<td><?php if($result = $db->query("SELECT votos FROM municipal WHERE last = 'miranda'")){
										$row = mysqli_fetch_array($result);
										}else{
											echo -1;
										}; echo $row['votos'];?> </td>
						</tr>
						<tr>
							<th>Gustavo César Jesús  Buenrostro Díaz</th>
							<td><?php if($result = $db->query("SELECT votos FROM municipal WHERE last = 'buenrostro'")){
										$row = mysqli_fetch_array($result);
										}else{
											echo -1;
										}; echo $row['votos'];?> </td>
						</tr>
						<tr>
							<th>Carlos Octavio Robles Altamirano</th>
							<td><?php if($result = $db->query("SELECT votos FROM municipal WHERE last = 'robles'")){
										$row = mysqli_fetch_array($result);
										}else{
											echo -1;
										}; echo $row['votos'];?> </td>
						</tr>
						<tr>
							<th>Marco Antonio Carrillo Pacheco</th>
							<td><?php if($result = $db->query("SELECT votos FROM municipal WHERE last = 'carrillo'")){
										$row = mysqli_fetch_array($result);
										}else{
											echo -1;
										}; echo $row['votos'];?> </td>
						</tr>
					</tbody>
				</table>
				<table id="source2">
					<caption>Gobernador</caption>
					<thead>
						<tr>
							<th></th>
							<th>Votos registrados para gobernador</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Francisco Domínguez  Servién</th>
							<td><?php if($result = $db->query("SELECT votos FROM gobernador WHERE last = 'dominguez'")){
										$row = mysqli_fetch_array($result);
										}else{
											echo -1;
										}; echo $row['votos'];?> </td>
						</tr>
						<tr>
							<th>Roberto Loyola Vera</th>
							<td><?php if($result = $db->query("SELECT votos FROM gobernador WHERE last = 'loyola'")){
										$row = mysqli_fetch_array($result);
										}else{
											echo -1;
										}; echo $row['votos'];?> </td>
						</tr>
						<tr>
							<th>Adolfo Camacho Esquivel</th>
							<td><?php if($result = $db->query("SELECT votos FROM gobernador WHERE last = 'camacho'")){
										$row = mysqli_fetch_array($result);
										}else{
											echo -1;
										}; echo $row['votos'];?> </td>
						</tr>
						<tr>
							<th>Salvador López Ávila</th>
							<td><?php if($result = $db->query("SELECT votos FROM gobernador WHERE last = 'lopez'")){
										$row = mysqli_fetch_array($result);
										}else{
											echo -1;
										}; echo $row['votos'];?> </td>
						</tr>
						<tr>
							<th>Celia Maya García</th>
							<td><?php if($result = $db->query("SELECT votos FROM gobernador WHERE last = 'maya'")){
										$row = mysqli_fetch_array($result);
										}else{
											echo -1;
										}; echo $row['votos'];?> </td>
						</tr>
						<tr>
							<th>Eda Martínez Pazarán</th>
							<td><?php if($result = $db->query("SELECT votos FROM gobernador WHERE last = 'martinez'")){
										$row = mysqli_fetch_array($result);
										}else{
											echo -1;
										}; echo $row['votos'];?> </td>
						</tr>
					</tbody>
				</table>
		</div>
		
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
		  	<div class="navbar-header">
	      		<a class="navbar-brand" href="#" style="cursor:default;">INFÓRMATE</a>
	    	</div>
	    	<div>
	    		<ul class ="nav navbar-nav">
	        		<li><a href="#">Estadísticas</a></li>
	        		<li><a href="survey_gob.php">Candidatos a Gobernador</a></li>
	        		<li><a href="survey_mun.php">Candidatos a Presidente Municipal</a></li>
	      		</ul>
	    	</div>
	  	</div>
	</nav>

	<div class="container-fluid">
		<br><br>
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<h1 id="t">Que no le digan, que no le cuenten. <br> Mejor infórmese</h1>
					</div>
				</div>
			<!-- <div class="page-header"></div> -->
			</div>
		</div>

		<div class="jumbotron">
			<p id="irr">Tomar decisiones sin información es peligroso e irresponsable. <br> 
				Lo invitamos a revisar las propuestas de los candidatos y a dejarnos su opinion. <br>
				No se apure, ya nos encargamos de la investigación y el resumen de las propuestas por usted. <br> 
				La información se encuentra dando click en alguno de los siguientes botones: <br><br>
				<a href="survey_gob.php"><kbd id="Gobs">Candidatos a Gobernador</kbd></a>
				<a href="survey_mun.php"><kbd id="Pres">Candidatos a Presidente Municipal</kbd></a>
			</p><br><br>

			<div id="siguiente-seccion"><a href="#g" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-hand-down"></span></a></div>

		</div>

	</div>

	<br><br><br><br><br><br>

	<section id="g">
		<div class="row">
			<div class="col-sm-6"> 
				<div class="panel panel-default">
					<div class="panel-body"><div id="target2"></div></div> 
				</div>
			</div>

			<div class="col-sm-6"> 
				<div class="panel panel-default">
					<div class="panel-body"><div id="target"></div></div> 
				</div>
			</div>
		</div>	
		<!-- <h3  id="graficas">Gráficas</h3> -->
	</section>
	
	<div class="navbar navbar-inverse navbar-fixed-bottom">
		<div class="container-fluid">
			<blockquote id="quote" class="navbar-text">
			<!-- <div class="navbar-brand"> -->
				<p>La democracia es el proceso que garantiza que no seamos gobernados mejor de lo que nos merecemos.<kbd>George Bernard Shaw</kbd></p> 
				</blockquote>
		</div>
	</div>

	<script type="text/javascript">

	$(function() {
		$('#source').tableBarChart('#target', '', false);
		$('#source2').tableBarChart('#target2', '', false);
		//$("table").hide();
		//$("tbody").hide();

	});
	</script>
</body>
</html>
