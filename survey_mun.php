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
				 			<img class="img-responsive img-rounded" src="img/manuelpozo.jpg" alt="rl" width="105.6875" height="148.4375">
				 			<div class="panel">
				 				<p class="text-center">
				 					Manuel Pozo
				 				</p> 
				 			</div>
				 		</a>
				 	</li>
				  	<li>
				  		<a data-toggle="tab" href="#can2">
				  			<img class="img-responsive img-rounded" src="img/marcosaguilar.jpg" alt="pd" width="105.6875" height="148.4375">
				  			<div class="panel">
				 				<p class="text-center">
				  					Marcos Aguilar
				 				</p> 
				 			</div>
				  		</a>
				  	</li>
				  	<li>
				  		<a data-toggle="tab" href="#can3">
				  			<img class="img-responsive img-rounded" src="img/gonzalobarcenas.jpg" alt="ac" width="105.6875" height="148.4375">
				  			<div class="panel">
				 				<p class="text-center">
				 					<small>Gonzalo Bárcenas</small>
				 				</p> 
				 			</div>
				  		</a>
				  	</li>
				  	<li>
				  		<a data-toggle="tab" href="#can4">
				  			<img class="img-responsive img-rounded" src="img/angel2.jpg" alt="cm" width="105.6875" height="148.4375">
				  			<div class="panel">
				 				<p class="text-center">
				  					Ángel Miranda
				 				</p> 
				 			</div>
				  		</a>
				  	</li>
				  	<li>
				  		<a data-toggle="tab" href="#can5">
				  			<img class="img-responsive img-rounded" src="img/cristinaberenice.jpg" alt="sa" width="105.6875" height="148.4375">
				  			<div class="panel">
				 				<p class="text-center">
				  					Cristina García
				 				</p> 
				 			</div>
				  		</a>
				  	</li>
				  	<li>
				  		<a data-toggle="tab" href="#can6">
				  			<img class="img-responsive img-rounded" src="img/buenrostro2.jpg" alt="em" width="105.6875" height="148.4375">
				  			<div class="panel">
				 				<p class="text-center">
				  					<small>Gustavo Buenrostro</small>
				 				</p> 
				 			</div>
				  		</a>
				  	</li>
				  	<li>
				  		<a data-toggle="tab" href="#can7">
				  			<img class="img-responsive img-rounded" src="img/ph.png" alt="em" width="105.6875" height="148.4375">
				  			<div class="panel">
				 				<p class="text-center">
				  					Carlos Robles
				 				</p> 
				 			</div>
				  		</a>
				  	</li>	
				  	<li>
				  		<a data-toggle="tab" href="#can8">
				  			<img class="img-responsive img-rounded" src="img/marcoantonio.jpg" alt="em" width="105.6875" height="148.4375">
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
						    			<p>Nacido el 3 de Febrero de 1975 en la ciudad de Querétaro, Manuel Cabrera tiene un título universitario en Contaduría y Derecho, ambos otorgados por su Alma mater, la Universidad Autónoma de Querétaro (UAQ).</p>	
						  			</div>

							    </div>
							    <div class="col-md-3"> 
							      	<div class="container-fluid">
						  				<img class="img-responsive" src="img/pri0.jpg" alt="p1" width="450" height="452">
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
						    				<li>PresiSecretario de Finanzas del CDE PRI.</li>
						    				<li>Secretario de Planeación del CNOP.</li>
						    				<li>Delegado del CDE en Huimilpan.</li>
						    				<li>Consejero Municipal, Estatal y Nacional.</li>
						    				<li>Fundó su propio despacho de asesoría Contable y Jurídica.</li>
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
						    				<li>Programa de visión ciudadana</li>
						    				<li>App de reportes de usuarios registrados y validados.</li>
						    				<li>Reorganización de la fuerza (tránsito y policía motorizada).</li>
						    				<li>Construcción de 5 comandancias.</li>
						    				<li>Construcción de tres cipreses.</li>
						    				<li>Cámaras y seguridad privada reportando al centro de mando.</li>
						    				<li>Coproducción de seguridad.</li>
						    				<li>Policía mejor equipada, más capacitada y mejor pagada.</li>
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
						    			<p>Nacido el 5 de julio de 1972, en la ciudad de Querétaro. Es Licenciado en Derecho por la Universidad Autónoma de Querétaro y tiene una maestría en Derecho Constitucional por la misma, Además de ser un Investigador de la Universidad de California en Santa Bárbara, CA.</p>	
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
						    				<li>Diputado local en la LVI Legislatura del Congreso de Querétaro. (2009-2012)</li>
						    				<li>Presidió las comisiones de Movilidad Sustentable, tránsito, vialidad y Autotransporte Público.</li>
						    				<li>Coordinador de transparencia y rendición de cuentas para la presentación de la plataforma política electoral (2009-2012).</li>
						    				<li>Consejero estatal en Querétaro e integrante del CDE del PAN.</li>
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
						    				<li>Plan de movilidad en la capital</li>
						    				<li>Plan para afrontar el narcomenudeo que afecta a los barrios, colonias y universidades en Querétaro.</li>
						    				<li>Creación de un instituto que garantice que cualquier persona pueda recibir capacitación y formación gratuita desde el gobierno municipal para establecer un negocio. Que este instituto pueda promover la generación de incubadoras comerciales o incubadoras familiares de negocios, y pueda traer recursos del gobierno federal para invertirlos en nuevos emprendedores.</li>
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
						    			<p>Nace el 11 de mayo de 1985 en la ciudad de Querétaro. Egresado de la Autónoma de Querétaro de la Licenciatura en Ciencia Políticas y Administración Pública, con Maestría en Ciencia Sociales y especialidad en Estudios Socio territoriales. </p>	
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
						    				<li>Secretario de las Juventudes de Izquierda del PRD en Querétaro</li>
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
						    				<li>Sostiene que es urgente generar los espacios y las actividades educativas, recreativas y culturales, para inhibir el delito, para que delinquir no sea una opción. La propuesta que presenta a la ciudadanía es la de un gobernante sensible ante las necesidades sociales. “Sociedad y gobierno son el binomio perfecto para solventar juntos cualquier problema o situación que se presente” sostuvo el candidato.</li>
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
						    			<p>Nació en la ciudad de Querétaro y es Licenciado en Derecho, Universidad Autónoma de Querétaro (UAQ); Doctor en Ciencia Política, Facultad de Ciencias Políticas y Sociales de la UNAM.</p>	
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
						    				<li>Coordinador del Centro de Investigaciones Sociales de la UAQ.</li>
						    				<li>Profesor/investigador de la Facultad de Ciencias Políticas y Sociales de la UAQ.</li>
						    				<li>Fue Consejero Electoral y Presidente del Instituto Electoral de Querétaro. Actualmente es profesor/investigador jubilado.</li>
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
						    				<li>Reducir los excesivos sueldos que se atribuyen los altos funcionarios públicos (Presidente Municipal, síndicos, regidores, cuadros intermedios y altos).</li>
						    				<li>Generar las condiciones para el empleo, agilizando y simplificando los trámites burocráticos y asesorando administrativamente al pequeño y mediano industrial y comercial; así mismo desarrollaremos una política de promoción de la economía popular, social y solidaria (cooperativas, empresas sociales, escuelas de artes y oficios, sistema de ahorro y crédito popular, entre otros).</li>
						    				<li>En materia de seguridad, fortalecer con cuerpos policíacos de barrio honestos, capacitados y que respeten los derechos humanos para que estén en tu colonia, fraccionamiento, ejido o comunidad protegiendo tu patrimonio y tu seguridad personal.</li>
						    				<li>Atacar el fenómeno del pandillerismo con valores éticos, diseñando diversos programas culturales, deportivos, artísticos y educativos.</li>
						    				<li>Desarrollar un transporte masivo económico, ecológico, ordenado y eficaz; igualmente ampliaremos las ciclopistas y los espacios peatonales para tener una ciudad con mejor movilidad para todos y no solo para el automóvil.</li>
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
						    			Nacida en la ciudad de Querétaro, la candidata Berenice García estudió la licenciatura en Derecho en la Facultad de Derecho de la UAQ. 	
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
						    				<li>Secretaria de Organización, integrante de la Comisión Operativa Estatal.</li>
						    				<li>Secretaria de la Coordinadora Ciudadana Estatal.</li>
						    				<li>Secretaria de la Coordinadora Ciudadana Nacional.</li>
						    				<li>Secretaria del Consejo Ciudadano Nacional.</li>
						    				<li>Delegada a la Primera y Segunda Convención Nacional Democrática.</li>
						    				<li>Coordinadora de dos campañas a la presidencia municipal de Querétaro.</li>
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
						    				<li>Tener un municipio austero, que se conseguiría mediante la disminución de sueldos en trabajadores que van desde directores hacía arriba, esto con el objetivo de disminuir deudas y mantener finanzas sanas.</li>
						    				<li>En el tema pluvial sugirió la necesidad de revisar todos los drenes y brindar los servicios necesarios para que no pasen cosas como en Peñuelas, en donde un fenómeno meteorológico rebasó cualquier obra.</li>
						    				<li>En lo referente a las declaraciones patrimoniales, advirtió que se está utilizando más como un instrumento de descalificaciones entre partidos, que un verdadero ejercicio de transparencia y señaló que desde su trinchera no tiene conflictos de interés de ningún tipo.</li>
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

				  	<div id="can7" class="tab-pane fade">
						<div class="panel panel-default">
						 	<div class="panel-heading ph">
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
						  				<img class="img-responsive" src="img/ph.png" alt="ASOT" width="200" height="200">
						  			</div>
							    </div>
							</div>	
						</div>

						<div class="panel panel-default">
						 	<div class="panel-heading ph">
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

						<div class="panel panel-default">
						 	<div class="panel-heading ph">
						    	<h3 class="panel-title">Propuestas</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			<ul>
						    				<li>Fomentar, promover y generar una cultura de derechos humanos hacia los militantes, a la ciudadanía y exigir que todas las autoridades en el ámbito de su competencia los promueva. </li>
						    				<li>Fomentar un Mercado con comercio justo.</li>
						    				<li>Promover una política salarial progresiva que fortalezca el crecimiento de la economía familiar.</li>
						    				<li>Garantizar el derecho al internet y a la conectividad global. </li>
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
						    			Nace el 29 de noviembre de 1965. Tiene una Licenciatura en Derecho por la UVM y una maestría en Derecho Constitucional y Amparo.	
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
						    				<li>Coordinador general del Colegio de Abogados Litigantes de Querétaro</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Secretario Ejecutivo Nacional de la Federación Nacional de Abogados.</li>
						    				<li>Miembro de la Unión Social de Empresarios Mexicanos.</li>
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
						    				<li>Encuentro Social propone un encuentro de clases, una nueva manera de ver y hacer política, partiendo de valores firmes y principios claros. No es una lucha de carácter ideológico, utópico, sino un encuentro de clases basado en la consciencia social. Nuestro programa político tiene como principal postulado la reconciliación nacional.</li>
						    				<li>Promover intensamente la idea de un nuevo pacto social, fruto de la combinación de un gobierno limitado, una sociedad movilizada, el reconocimiento al núcleo familiar y el respeto a la ley y a la dignidad del ser humano.</li>
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
				  	<div id="can8" class="tab-pane fade">
						<div class="panel panel-default">
						 	<div class="panel-heading pt">
						    	<h3 class="panel-title">Biografía</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			Estudió Licenciatura en Contaduría por la Universidad Autónoma de México UNAM, una maestría en Psicología  y un Doctorado  Psicología y Educación por la Universidad Autónoma de Querétaro (UAQ).	
						  			</div>

							    </div>
							    <div class="col-md-3"> 
							      	<div class="container-fluid">
						  				<img class="img-responsive" src="img/pt.png" alt="ASOT" width="200" height="200">
						  			</div>
							    </div>
							</div>	
						</div>

						<div class="panel panel-default">
						 	<div class="panel-heading pt">
						    	<h3 class="panel-title">Currículum</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			<ul>
						    				<li>Profesor investigador de tiempo completo de la Facultad de Psicología, Universidad Autónoma de Querétaro.</li>
						    				<li>Profesor titular de las materias de Historia y Sociedad I; Historia y Sociedad II; Cultura y Sociedad en México; Métodos en Psicología I.</li>
						    				<li>Coordinador de la Unidad Multidisciplinaria de Estudios Sobre el Trabajo, UAQ.</li>
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
						 	<div class="panel-heading pt">
						    	<h3 class="panel-title">Propuestas</h3>
						  	</div>
						  	<div class="row">
								<div class="col-md-9">
							    	<div class="panel-body">
						    			<ul>
						    				<li>Lanza el reto de bajar a la mitad el sueldo del presidente municipal “yo invito a los candidatos y al ganador para que se reduzca el sueldo en 50% que hoy es de 126 mil pesos”. </li>
						    				<li>Presupuesto anual para la UAQ con respeto a la autonomía universitaria.</li>
						    				<li>Salario estudiantil complementario al otorgamiento de becas.</li>
						    				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua4. Redes troncales de transporte urbano “Servicio intercolonias”, “Condiciones de trabajo dignas para el operador”.</li>
						    				<li>5. Programas de “Conoce tu municipio” y “Sugiriendo Mejoras”.</li>
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
									    	<label><input type="radio" name="optradio" value='pozo'>Manuel Pozo</label>
									    </div>
									</div>
						  			<div class="col-md-2">
									    <div class="radio"> 
											<label><input type="radio" name="optradio" value='aguilar'>Marcos Aguilar</label>
									    </div>
									</div>
						  			<div class="col-md-2">
									    <div class="radio"> 
											<label><input type="radio" name="optradio" value='barcenas' >Gonzalo Bárcenas</label>
									    </div>
									</div>
						  			<div class="col-md-2">
									    <div class="radio"> 
											<label><input type="radio" name="optradio" value='miranda'>Angel Miranda</label>
									    </div>
									</div>
									<div class="col-md-2">
									    <div class="radio"> 
											<label><input type="radio" name="optradio" value='garcia'>Cristina García</label>
									    </div>
									</div>
									<div class="col-md-2">
									    <div class="radio"> 
											<label><input type="radio" name="optradio" value'buenrostro'>Gustavo Buenrostro</label>
									    </div>
									</div>
									<div class="col-md-2">
									    <div class="radio"> 
											<label><input type="radio" name="optradio" value'robles'>Carlos Robles</label>
									    </div>
									</div>
									<div class="col-md-2">
									    <div class="radio"> 
											<label><input type="radio" name="optradio" value'carrillo'>Marco Carrillo</label>
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