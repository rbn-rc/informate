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
			      		<a class="navbar-brand" href="#" style="cursor:default;">INFÓRMATE</a>
			    	</div>
			    	<div>
			    		<ul class ="nav navbar-nav">
			        		<li><a href="index.html">Estadísticas</a></li>
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
				 			<img class="img-responsive img-rounded" src="img/rl.jpg" alt="rl" width="155.75" height="218.75">
				 			<div class="panel">
				 				<p class="text-center">
				 					Roberto Loyola
				 				</p> 
				 			</div>
				 		</a>
				 	</li>
				  	<li>
				  		<a data-toggle="tab" href="#can2">
				  			<img class="img-responsive img-rounded" src="img/pd.jpg" alt="pd" width="155.75" height="218.75">
				  			<div class="panel">
				 				<p class="text-center">
				  					Francisco Domínguez
				 				</p> 
				 			</div>
				  		</a>
				  	</li>
				  	<li>
				  		<a data-toggle="tab" href="#can3">
				  			<img class="img-responsive img-rounded" src="img/ac.jpg" alt="ac" width="155.75" height="218.75">
				  			<div class="panel">
				 				<p class="text-center">
				  					Adolfo Camacho
				 				</p> 
				 			</div>
				  		</a>
				  	</li>
				  	<li>
				  		<a data-toggle="tab" href="#can4">
				  			<img class="img-responsive img-rounded" src="img/cm.jpg" alt="cm" width="155.75" height="218.75">
				  			<div class="panel">
				 				<p class="text-center">
				  					Celia Maya
				 				</p> 
				 			</div>
				  		</a>
				  	</li>
				  	<li>
				  		<a data-toggle="tab" href="#can5">
				  			<img class="img-responsive img-rounded" src="img/sa.jpg" alt="sa" width="155.75" height="218.75">
				  			<div class="panel">
				 				<p class="text-center">
				  					Salvador López
				 				</p> 
				 			</div>
				  		</a>
				  	</li>
				  	<li>
				  		<a data-toggle="tab" href="#can6">
				  			<img class="img-responsive img-rounded" src="img/em.jpg" alt="em" width="155.75" height="218.75">
				  			<div class="panel">
				 				<p class="text-center">
				  					Eda Martínez
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
						    			<p>Nace el 13 de Agosto de 1967 en la ciudad de Querétaro México.  Es egresado de la Licenciatura en Derecho por la Universidad Autónoma de Querétaro y realizó un posgrado en Administración y Gerencia Pública en España.</p>  
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
						    				<li>Presidente Municipal de Queretaro (2012-1015).</li>
						    				<li>Secretario Particular del Oficial Mayor del Estado de Querétaro (1991-1994).</li>
						    				<li>Secretario Particular Adjunto del Gobernador como parte del Gabinete Estatal (1994-1997).</li>
						    				<li>Secretario de Gobernación en la actual administración del Gobernador José Calzada Rovirosa (2011-2012).</li>
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
							    		<p>Presenta una propuesta de movilidad  con el fin de mejorar atención en transporte público, mejores vialidades para automovilistas, ampliación de plazas para el peatón, más ciclo pistas y mejorar la red de carreteras.</p>

										<p>En el rubro de usuarios del transporte, se destacó mejorar la atención de los choferes con los usuarios, mantener tarifas preferenciales, mejorar las condiciones laborales de los choferes e incorporar nuevos camiones. En el aspecto de los automovilistas, el candidato habló de mejores vialidades, reducir el tráfico con la promoción del transporte escolar y soluciones vehiculares por colonia. En aspectos que denominó “para el peatón”, Loyola Vera refirió que se continuará con la ampliación de banquetas y sistema de plazas como en la capital, además de más ciclo pistas que estén interconectadas, además de un sistema de bicis públicas. En cuanto a infraestructura y ampliación de red carretera a los municipios, el candidato informó que zonas como San Joaquín y Pinal de Amoles pudieran conectarse, así como mejores vialidades para San Juan del Río y Tequisquiapan. Finalmente, en el rubro de educación vial, fueron enunciados los proyectos de un carril exclusivo para transporte público, multiplicar el programa “Uno a Uno” y promover un reglamento de cultura vial.</p>
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
						    			<p>Nace el 11 de Agosto de 1966 (48 años) en la ciudad de Querétaro, México. Tiene una formación como médico veterinario Zootecnista otorgada por la Universidad Autónoma de Querétaro (UAQ) y una especialización en producción animal por la Universidad Nacional Autónoma de México (UNAM).</p> 	
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
						    				<li>Presidente Municipal de Querétaro (2009-2012).</li>
						    				<li>Secretario General de la ANAC (Asociación Nacional de Alcaldes) (2009 – 2011).</li>
						    				<li>Catedrático de la materia de producción de cerdos I y II en la UAQ (1992-2002).</li>
						    				<li>Catedrático de la materia de producción de cerdos en el ITESM Campus Querétaro (1999-2002).</li>
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
						    				<li>Propuesta de Seguridad. Se aplicarán 25 acciones que se desprenden de siete líneas estratégicas para recuperar la paz y tranquilidad de las familias queretanas.</li>
						    				<li>Respeto a la atención a las víctimas.</li>
						    				<li>Justicia oral eficiente y sin pretextos.</li>
						    				<li>Prevención para combatir el delito.</li>
						    				<li>Policías y ministerios públicos confiables.</li>
						    				<li>Rescatar del olvido los Centros Penitenciarios.</li>
						    				<li>Colaboración efectiva para el combate a la delincuencia organizada.</li>
						    				<li>Alineamiento en Querétaro al Sistema Nacional Anticorrupción.</li>
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
						    			Desconocido.	
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
						    				<li>Desconocido.</li>
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
						    				<li>Desconocido.</li>
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
						    			Nace en la ciudad de Querétaro, Querétaro. Es Licenciada en Derecho y Contabilidad por la UAQ. Cuenta con un Doctorado en Derecho también por la misma universidad. Además La  Dr. Celia tiene dos maestrías la primera en Derecho fiscal y la segunda en Impuestos, ambos otorgados por la Universidad Autónoma de Querétaro. 	
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
						    				<li>Fue profesora de cátedra en la UAQ, se ha desempeñado como agente del Ministerio Público de la Procuraduría General de Justicia del Estado, fungió como asesora jurídica en las áreas civil y penal del sector empresarial. En el 2003 fue candidata a la gubernatura del Estado de Querétaro por el PRD. </li>
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
						    				<li>Salud: Romper la división social que deja a miles de personas fuera de la atención básica, todos los queretanos sin distinción de clase ya no van a ser rechazados por los sistemas de atención en materia de salud.</li>
						    				<li>Vivienda: Realizaremos un programa de vivienda, donde el gobierno sea el principal actor, el déficit de vivienda que tenemos lo combatiremos con la inversión pública, que ponga al alcance de las familias un hogar.</li>
						    				<li>Transporte: Implementar transporte que ya no use gasolina o diesel, iniciaríamos las obras del metro, tenemos ubicado el lugar y sustituiríamos gran parte del transporte para que la gente pueda desplazarse de un lugar a otro con más tranquilidad y eso nos permitirá elevar la calidad de vida.</li>
						    				<li>Empleo: Un salario, no tasable en dinero sino con base en el precio de la canasta básica, eliminar las juntas de conciliación para convertirlas en verdaderos tribunales para que atienda con oportunidad y sin politización los conflictos laborales; más oportunidad a los universitarios, dentro de las grandes empresas; programa de apoyo para la pequeña y mediana empresa, que son las que generan más empleos.</li>
						    				<li>Campo: Instituiremos un fondo para garantizar a los pequeños productores un precio para sus productos.</li>
						    				<li>Inundaciones: Hablar con los constructores para que hagan en sus fraccionamientos galerías de filtración; tendremos un programas de desazolve de canales, presas y bordos.</li>
						    				<li>Sistema de justicia: Los juicios orales deben ser la regla y no la excepción en todas las materias de la impartición de justicia.</li>
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
						    			Desconocido.
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
						    				<li>Desconocido</li>
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
						    				<li>Una de sus propuestas de campaña es disminuir en un 20 por ciento el sueldo de los funcionarios de primer nivel de Querétaro, a fin de generar un ahorro de 40 millones de pesos, e invertir ese recurso en el sector educativo. Asimismo, López Ávila agrego que otras de sus propuestas son: hacer un grupo antisecuestro que atienda llamada y reaccione al instante. Además se comprometió a hacer pública se declaración patrimonial.</li>
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
						    			Egresada de la Escuela Bancaria y Comercial, de La licenciatura en Ciencias. Egresada de la Universidad Del Valle de México de la Licenciatura en Derecho. Posgraduada de la Universidad Panamericana, en Impuestos y Derecho Fiscal. Posgraduada de la Universidad Autónoma de Querétaro, en Derecho Notarial y Registral.	
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
						    				<li>Directora General de la empresa BIOPHARMEX, S.A. de C.V. desde 1997.</li>
						    				<li>Directora General de la empresa BM SIRE, S.A. de C.V. desde 2010.</li>
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
						    				<li>La candidata a gobernadora del estado, por el Partido Encuentro Social (PES), Eda Martínez, se comprometió a que esta fuerza política creará más mejores condiciones para que las mujeres en la entidad logren desarrollarse, si es que llega al poder.</li>
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
						<?php if($auth->signedIn()): ?> <p><big>Usted ha iniciado sesión en Twitter. <a href="twitter/signout.php">Cerrar sesión en Twitter</a></big>
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
									    	<label><input type="radio" name="optradio" value="loyola">Roberto Loyola</label>
									    </div>
									</div>
						  			<div class="col-md-2">
									    <div class="radio"> 
											<label><input type="radio" name="optradio" value="dominguez">Francisco Dominguez</label>
									    </div>
									</div>
						  			<div class="col-md-2">
									    <div class="radio"> 
											<label><input type="radio" name="optradio" value="camacho">Adolfo Camacho</label>
									    </div>
									</div>
						  			<div class="col-md-2">
									    <div class="radio"> 
											<label><input type="radio" name="optradio" value="maya">Celia Maya</label>
									    </div>
									</div>
									<div class="col-md-2">
									    <div class="radio"> 
											<label><input type="radio" name="optradio" value="lopez">Salvador López</label>
									    </div>
									</div>
									<div class="col-md-2">
									    <div class="radio"> 
											<label><input type="radio" name="optradio" value="martinez">Eda Martínez</label>
									    </div>
									</div>
								</div>

								<div id="message">
									

								</div>
								
								<div class="row">
									<div class="col-lg-12 text-center">
										<button type="submit" class="btn btn-danger btn-lg">Votar</button>									
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