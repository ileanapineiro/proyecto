<html>
<head>
  <style type="text/css">
			/* menu */

			#menu ul {
			 list-style:none;
			 margin:0;
			 padding:0;
			}

			/* items del menu */

			#menu ul li {
			 background-color:#2e518b;
			}

			/* enlaces del menu */

			#menu ul a {
			 display:block;
			 color:#fff;
			 text-decoration:none;
			 font-weight:400;
			 font-size:15px;
			 padding:10px;
			 font-family:"HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif;
			 letter-spacing:1px;
			}

			/* items del menu */

			#menu ul li {
			 position:relative;
			 float:left;
			 margin:0;
			 padding:0;
			}

			/* efecto al pasar el ratón por los items del menu */

			#menu ul li:hover {
			 background:#5b78a7;
			}

			/* menu desplegable */

			#menu ul ul {
			 display:none;
			 position:absolute;
			 top:100%;
			 left:0;
			 background:#eee;
			 padding:0;
			}

			/* items del menu desplegable */

			#menu ul ul li {
			 float:none;
			 width:150px
			}

			/* enlaces de los items del menu desplegable */

			#menu ul ul a {
			 line-height:120%;
			 padding:10px 15px;
			}

			/* items del menu desplegable al pasar el ratón */

			#menu ul li:hover > ul {
			 display:block;
			}
			
		</style>
	</head>
	<body>	
		<nav id="menu">
			<ul>
				<li>
					<a href="#">Perfil</a>
					<ul>
						<li><a href="Subir_archivos.php">Alta</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Clientes</a>
					<ul>
						<li><a href="clientes_alta.php">Alta</a></li>
						<li><a href="clientes_listado.php">Listado</a></li>
					</ul>
				</li>
			</ul>
		</nav>