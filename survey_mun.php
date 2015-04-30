<?php 
	require_once 'twitter/init.php';

	$auth = new TwitterAuth($client);

?>
<html>
		<head>
			<title>¡Infórmate!</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="css/styles.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<script type="application/javascript" src="js/voteProcess.js"></script>
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		</head>

		
		<body>

			<nav class="navbar navbar-inverse navbar-fixed-top">

				<div class="container-fluid">
			    	<div class="navbar-header">
			      		<a class="navbar-brand" href="#">INFÓRMATE</a>
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

			<div class="container">	
				<div class="page-header">
						
					<div class="panel panel-default">
						<h3 class="text-center">Elige a tu candidato:</h3>
					</div>
				</div>
			</div>

			<div class="container">
				<ul class="nav nav-tabs">
				 	<li class="active">
				 		<a data-toggle="tab" href="#can1">
				 			<img class="img-responsive img-rounded" src="img/rl.jpg" alt="rl" width="105.6875" height="148.4375">
				 			<div class="panel">
				 				<p class="text-center">
				 					Manuel Pozo
				 				</p> 
				 			</div>
				 		</a>
				 	</li>
				  	<li>
				  		<a data-toggle="tab" href="#can2">
				  			<img class="img-responsive img-rounded" src="img/pd.jpg" alt="pd" width="105.6875" height="148.4375">
				  			<div class="panel">
				 				<p class="text-center">
				  					Marcos Aguilar
				 				</p> 
				 			</div>
				  		</a>
				  	</li>
				  	<li>
				  		<a data-toggle="tab" href="#can3">
				  			<img class="img-responsive img-rounded" src="img/ac.jpg" alt="ac" width="105.6875" height="148.4375">
				  			<div class="panel">
				 				<p class="text-center">
				 					<small>Gonzalo Bárcenas</small>
				 				</p> 
				 			</div>
				  		</a>
				  	</li>
				  	<li>
				  		<a data-toggle="tab" href="#can4">
				  			<img class="img-responsive img-rounded" src="img/cm.jpg" alt="cm" width="105.6875" height="148.4375">
				  			<div class="panel">
				 				<p class="text-center">
				  					Ángel Miranda
				 				</p> 
				 			</div>
				  		</a>
				  	</li>
				  	<li>
				  		<a data-toggle="tab" href="#can5">
				  			<img class="img-responsive img-rounded" src="img/sa.jpg" alt="sa" width="105.6875" height="148.4375">
				  			<div class="panel">
				 				<p class="text-center">
				  					Cristina García
				 				</p> 
				 			</div>
				  		</a>
				  	</li>
				  	<li>
				  		<a data-toggle="tab" href="#can6">
				  			<img class="img-responsive img-rounded" src="img/em.jpg" alt="em" width="105.6875" height="148.4375">
				  			<div class="panel">
				 				<p class="text-center">
				  					<small>Gustavo Buenrostro</small>
				 				</p> 
				 			</div>
				  		</a>
				  	</li>
				  	<li>
				  		<a data-toggle="tab" href="#can7">
				  			<img class="img-responsive img-rounded" src="img/em.jpg" alt="em" width="105.6875" height="148.4375">
				  			<div class="panel">
				 				<p class="text-center">
				  					Carlos Robles
				 				</p> 
				 			</div>
				  		</a>
				  	</li>	
				  	<li>
				  		<a data-toggle="tab" href="#can8">
				  			<img class="img-responsive img-rounded" src="img/em.jpg" alt="em" width="105.6875" height="148.4375">
				  			<div class="panel">
				 				<p class="text-center">
				  					Marco Carrillo
				 				</p> 
				 			</div>
				  		</a>
				  	</li>

				</ul>


				<div class="tab-content">
					<div id="can1" class="tab-pane fade in active">
						<div class="panel panel-danger">
						 	<div class="panel-heading">
						    	<h3 class="panel-title">Biografía</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			Roberto Loyola, nacido en la luna, es el candidato del Pri a la gobernatura de Queretaro. Lo pueden observar en todos lados ya que su rostro esta hasta en los retretes del IMSS y en las alcantarillas de todo Queretaro. Lo pueden distiguir porque es calvo y tiene una separacion entre los dientes muy al estilo Madonna. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.	
						  			</div>

							    </div>
							    <div class="col-md-3"> 
							      	<div class="container-fluid">
						  				<img class="img-responsive" src="img/p1.jpg" alt="p1" width="450" height="452">
						  			</div>
							    </div>
							</div>	
						</div>

						<div class="panel panel-danger">
						 	<div class="panel-heading">
						    	<h3 class="panel-title">Currículum</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			<ul>
						    				<li>Presidente Municipal de Queretaro</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    			</ul>
						  			</div>

							    </div>
							    <div class="col-md-3"> 
							      	<div class="container-fluid">
						  				<img class="img-responsive" src="img/asot.jpg" alt="ASOT" width="200" height="160">
						  			</div>
							    </div>
							</div>
						</div>

						<div class="panel panel-danger">
						 	<div class="panel-heading">
						    	<h3 class="panel-title">Propuestas</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			<ul>
						    				<li>Parchar los baches de Queretaro</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    			</ul>
						  			</div>

							    </div>
							    <div class="col-md-3"> 
							      	<div class="container-fluid">
						  				<img class="img-responsive" src="img/asot.jpg" alt="ASOT" width="200" height="160">
						  			</div>
							    </div>
							</div>							  		
						</div>

						<hr>
				  	</div>
				  	<div id="can2" class="tab-pane fade">
						<div class="panel panel-primary">
						 	<div class="panel-heading">
						    	<h3 class="panel-title">Biografía</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			Pancho Dominguez, nacido en la luna, es el candidato del Pri a la gobernatura de Queretaro. Lo pueden observar en todos lados ya que su rostrto esta hasta en los retretes del IMSS y en las alcantarillas de todo Queretaro. Lo pueden distiguir porque es calvo y tiene una separacion entre los dientes muy al estilo Madonna. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.	
						  			</div>

							    </div>
							    <div class="col-md-3"> 
							      	<div class="container-fluid">
						  				<img class="img-responsive" src="img/pan.png" alt="pan" width="200" height="200">
						  			</div>
							    </div>
							</div>	
						</div>

						<div class="panel panel-primary">
						 	<div class="panel-heading">
						    	<h3 class="panel-title">Currículum</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			<ul>
						    				<li>Presidente Municipal de Queretaro</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    			</ul>
						  			</div>

							    </div>
							    <div class="col-md-3"> 
							      	<div class="container-fluid">
						  				<img class="img-responsive" src="img/asot.jpg" alt="ASOT" width="200" height="160">
						  			</div>
							    </div>
							</div>
						</div>

						<div class="panel panel-primary">
						 	<div class="panel-heading">
						    	<h3 class="panel-title">Propuestas</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			<ul>
						    				<li>Parchar los baches de Queretaro</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    			</ul>
						  			</div>

							    </div>
							    <div class="col-md-3"> 
							      	<div class="container-fluid">
						  				<img class="img-responsive" src="img/asot.jpg" alt="ASOT" width="200" height="200">
						  			</div>
							    </div>
							</div>							  		
						</div>

						<hr>
				  	</div>
				  	<div id="can3" class="tab-pane fade">
				    	<div class="panel panel-warning">
						 	<div class="panel-heading">
						    	<h3 class="panel-title">Biografía</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			Adolfo Camcho, nacido en la luna, es el candidato del Pri a la gobernatura de Queretaro. Lo pueden observar en todos lados ya que su rostrto esta hasta en los retretes del IMSS y en las alcantarillas de todo Queretaro. Lo pueden distiguir porque es calvo y tiene una separacion entre los dientes muy al estilo Madonna. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.	
						  			</div>

							    </div>
							    <div class="col-md-3"> 
							      	<div class="container-fluid">
						  				<img class="img-responsive" src="img/prd.jpg" alt="prd" width="200" height="160">
						  			</div>
							    </div>
							</div>	
						</div>

						<div class="panel panel-warning">
						 	<div class="panel-heading">
						    	<h3 class="panel-title">Currículum</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			<ul>
						    				<li>Presidente Municipal de Queretaro</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    			</ul>
						  			</div>

							    </div>
							    <div class="col-md-3"> 
							      	<div class="container-fluid">
						  				<img class="img-responsive" src="img/asot.jpg" alt="ASOT" width="200" height="160">
						  			</div>
							    </div>
							</div>
						</div>

						<div class="panel panel-warning">
						 	<div class="panel-heading">
						    	<h3 class="panel-title">Propuestas</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			<ul>
						    				<li>Parchar los baches de Queretaro</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    			</ul>
						  			</div>

							    </div>
							    <div class="col-md-3"> 
							      	<div class="container-fluid">
						  				<img class="img-responsive" src="img/asot.jpg" alt="ASOT" width="200" height="160">
						  			</div>
							    </div>
							</div>							  		
						</div>

						<hr>
				  	</div>

				  	<div id="can4" class="tab-pane fade">
						<div class="panel panel-default">
						 	<div class="panel-heading morena">
						    	<h3 class="panel-title">Biografía</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			Celia Maya, nacida en la luna, es el candidato del Pri a la gobernatura de Queretaro. Lo pueden observar en todos lados ya que su rostro esta hasta en los retretes del IMSS y en las alcantarillas de todo Queretaro. Lo pueden distiguir porque es calvo y tiene una separacion entre los dientes muy al estilo Madonna. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.	
						  			</div>

							    </div>
							    <div class="col-md-3"> 
							      	<div class="container-fluid">
						  				<img class="img-responsive" src="img/morena.jpg" alt="morena" width="200" height="200">
						  			</div>
							    </div>
							</div>	
						</div>

						<div class="panel panel-default">
						 	<div class="panel-heading morena">
						    	<h3 class="panel-title">Currículum</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			<ul>
						    				<li>Presidente Municipal de Queretaro</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    			</ul>
						  			</div>

							    </div>
							    <div class="col-md-3"> 
							      	<div class="container-fluid">
						  				<img class="img-responsive" src="img/asot.jpg" alt="ASOT" width="200" height="200">
						  			</div>
							    </div>
							</div>
						</div>

						<div class="panel panel-default">
						 	<div class="panel-heading morena">
						    	<h3 class="panel-title">Propuestas</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			<ul>
						    				<li>Parchar los baches de Queretaro</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    			</ul>
						  			</div>

							    </div>
							    <div class="col-md-3"> 
							      	<div class="container-fluid">
						  				<img class="img-responsive" src="img/asot.jpg" alt="ASOT" width="200" height="160">
						  			</div>
							    </div>
							</div>							  		
						</div>

						<hr>
				  	</div>

				  	<!---->
				  	<div id="can5" class="tab-pane fade">
						<div class="panel panel-default">
						 	<div class="panel-heading movciu">
						    	<h3 class="panel-title">Biografía</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			Salvador Lopez, nacido en la luna, es el candidato del Pri a la gobernatura de Queretaro. Lo pueden observar en todos lados ya que su rostro esta hasta en los retretes del IMSS y en las alcantarillas de todo Queretaro. Lo pueden distiguir porque es calvo y tiene una separacion entre los dientes muy al estilo Madonna. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.	
						  			</div>

							    </div>
							    <div class="col-md-3"> 
							      	<div class="container-fluid">
						  				<img class="img-responsive" src="img/movciu.jpg" alt="ASOT" width="200" height="160">
						  			</div>
							    </div>
							</div>	
						</div>

						<div class="panel panel-default">
						 	<div class="panel-heading movciu">
						    	<h3 class="panel-title">Currículum</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			<ul>
						    				<li>Presidente Municipal de Queretaro</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    			</ul>
						  			</div>

							    </div>
							    <div class="col-md-3"> 
							      	<div class="container-fluid">
						  				<img class="img-responsive" src="img/asot.jpg" alt="ASOT" width="200" height="160">
						  			</div>
							    </div>
							</div>
						</div>

						<div class="panel panel-default">
						 	<div class="panel-heading movciu">
						    	<h3 class="panel-title">Propuestas</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			<ul>
						    				<li>Parchar los baches de Queretaro</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    			</ul>
						  			</div>

							    </div>
							    <div class="col-md-3"> 
							      	<div class="container-fluid">
						  				<img class="img-responsive" src="img/asot.jpg" alt="ASOT" width="200" height="160">
						  			</div>
							    </div>
							</div>							  		
						</div>

						<hr>
				  	</div>
				  	<!---->

				  	<div id="can6" class="tab-pane fade">
						<div class="panel panel-default">
						 	<div class="panel-heading pes">
						    	<h3 class="panel-title">Biografía</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			Eda Martinez, nacida en la luna, es el candidato del Pri a la gobernatura de Queretaro. Lo pueden observar en todos lados ya que su rostro esta hasta en los retretes del IMSS y en las alcantarillas de todo Queretaro. Lo pueden distiguir porque es calvo y tiene una separacion entre los dientes muy al estilo Madonna. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.	
						  			</div>

							    </div>
							    <div class="col-md-3"> 
							      	<div class="container-fluid">
						  				<img class="img-responsive" src="img/pes.png" alt="ASOT" width="200" height="200">
						  			</div>
							    </div>
							</div>	
						</div>

						<div class="panel panel-default">
						 	<div class="panel-heading pes">
						    	<h3 class="panel-title">Currículum</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			<ul>
						    				<li>Presidente Municipal de Queretaro</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    			</ul>
						  			</div>

							    </div>
							    <div class="col-md-3"> 
							      	<div class="container-fluid">
						  				<img class="img-responsive" src="img/asot.jpg" alt="ASOT" width="200" height="160">
						  			</div>
							    </div>
							</div>
						</div>

						<div class="panel panel-default">
						 	<div class="panel-heading pes">
						    	<h3 class="panel-title">Propuestas</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			<ul>
						    				<li>Parchar los baches de Queretaro</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						    			</ul>
						  			</div>

							    </div>
							    <div class="col-md-3"> 
							      	<div class="container-fluid">
						  				<img class="img-responsive" src="img/asot.jpg" alt="ASOT" width="200" height="160">
						  			</div>
							    </div>
							</div>							  		
						</div>

						<hr>
				  	</div>

				  	<!---->

				</div>
			</div>

			
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">
    					<h2 class="text-center">Vota!</h2>
						
  					</div>
  					<div class="panel-body">
						<?php if($auth->signedIn()): ?> <p>You are signed in. <a href="twitter/signout.php">Sign out</a></p>
					    <?php
						//Set tockes to tweet everytime the user signs in 	
						$client->setToken($_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
						$reply = $client->statuses_update('status=Yeah, acabo de votar en informate!!!');
						//print_r($reply);
						?>
  							<div class="row">
  								<p class="text-center">Selecciona al candidato de tu preferencia:</p>
  							</div>
  							<form action="voteCount.php" method="POST">
						  		<div class="row">
						  			<div class="col-md-2">
									 	<div class="radio">
									    	<label><input type="radio" name="optradio">Roberto Loyola</label>
									    </div>
									</div>
						  			<div class="col-md-2">
									    <div class="radio"> 
											<label><input type="radio" name="optradio">Francisco Dominguez</label>
									    </div>
									</div>
						  			<div class="col-md-2">
									    <div class="radio"> 
											<label><input type="radio" name="optradio" >Adolfo Camacho</label>
									    </div>
									</div>
						  			<div class="col-md-2">
									    <div class="radio"> 
											<label><input type="radio" name="optradio" >Celia Maya</label>
									    </div>
									</div>
									<div class="col-md-2">
									    <div class="radio"> 
											<label><input type="radio" name="optradio" >Salvador López</label>
									    </div>
									</div>
									<div class="col-md-2">
									    <div class="radio"> 
											<label><input type="radio" name="optradio" >Eda Martínez</label>
									    </div>
									</div>
								</div>

								<div id="message">

								</div>
								
								<div class="row">
									<div class="col-lg-12 text-center">
										<button type="submit" class="btn btn-default">Submit</button>									
									</div>
								</div>
							</form>
							<?php else: ?>
							<div class="row">
								<div class="col-lg-12 text-center">
  								<p class="text-center">Para votar debes iniciar sesion en Twitter:</p>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 text-center">
									<a href="<?php echo $auth->getAuthUrl(); ?>"><button type="submit" class="btn btn-primary btn-lg">Iniciar Sesion en Twitter</button></a> 
								</div>
							</div>
									
							<?php endif; ?>	
					</div>
				</div>
					
			</div>


			

			

		</body>

		<footer>
			<div class="container">
				<div class="panel panel-default">
					<h6 class="text-center">
						DAW all rights reserved 2015.
					</h6> 
				</div>
			</div>	
		</footer>	
</html>