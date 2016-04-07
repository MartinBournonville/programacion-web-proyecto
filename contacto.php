<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Distribuidora Bournonville</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="./css/estilo.css">
	</head>
	<body>
		<div class="container">
		<div class="row">
				<div class="col-md-12" id="head"></div>
				</div>
				</div>

		<div class="container" id="cuerpo">

		    
			

		<nav class="navbar navbar-inverse" role="navigation" >
		 <div class="collapse navbar-collapse navbar-ex1-collapse">
		    <ul class="nav navbar-nav">
		      <li class="active"><a href=index.php>Inicio</a></li>
		      <li class="active"><a href=quiensomos.php>Quienes somos</a></li>
		      <li class="dropdown active">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		          Productos <b class="caret"></b>
		        </a>
		        <ul class="dropdown-menu">
		          <li><a href="#">Filtros</a></li>
		          <li><a href="#">Aceites</a></li>
		          <li><a href="#">Baterias</a></li>
		          <li><a href="#">Lavadero</a></li>
   		        </ul>
		      </li>
		      <li class="active"><a href="#">Arma tu presupuesto</a></li>
		      <li class="active"><a href=contacto.php>Contacto</a></li>
		    </ul>
		  </div>
		</nav>
			<div class="col-md-8 col-md-offset-3">
				<form name="frmContacto" method="post" action=php/enviomail.php>
					<table width="500px">
						<tr>
							<td>
								<label for="first_name">Nombre: *</label>
							</td>
						<td>
							<input type="text" name="first_name" maxlength="50" size="25">
						</td>
						</tr>
						<tr>
							<td valign="top">
								<label for="last_name">Apellido: *</label>
							</td>
							<td>
								<input type="text" name="last_name" maxlength="50" size="25">
							</td>
						</tr>
						<tr>
							<td>
								<label for="email">Dirección de E-mail: *</label>
							</td>
							<td>
								<input type="text" name="email" maxlength="80" size="35">
							</td>
						</tr>
						<tr>
							<td>
								<label for="telephone">Número de teléfono:</label>
							</td>
							<td>
								<input type="text" name="telephone" maxlength="25" size="15">
							</td>
						</tr>
						<tr>
							<td>
								<label for="comments">Comentarios: *</label>
							</td>
							<td>
								<textarea name="comments" maxlength="500" cols="30" rows="5"></textarea>
							</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center">
								<input type="submit" value="Enviar">
							</td>
						</tr>
					</table>
				</form>
			</div>
	    </div>
	    

	    </div>
	    <div class="container">
			<div class="footer">
		    	<div class="row">
		    		<div class="col-md-4 col-md-offset-4">
		    			<font color="white">Todos los Derechos Reservados 
		    			@Maexe</font>
		    			
		    		</div>	

		    	</div>
	   		 </div>
	    </div>

	   

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>