<?php
include("/php/cnn.php");
?>
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
		          <li><a href=filtros.php>Filtros</a></li>
		          <li><a href=aceites.php>Aceites</a></li>
		          <li><a href=baterias.php>Baterias</a></li>
		          <li><a href=lavadero.php>Lavadero</a></li>
   		        </ul>
		      </li>
		      <li class="active"><a href=presupuesto.php>Arma tu presupuesto</a></li>
		      <li class="active"><a href=contacto.php>Contacto</a></li>
		    </ul>
		  </div>
		</nav>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<?php
				$cnn = conectar();
				//se envia la consulta  
				$result = mysql_query("SELECT * FROM lavadero ORDER BY ID ASC", $cnn);  
				?>  
				<table>
					<thead>
						<tr>
							<th>
								Producto
							</th>
							<th>
								Descripcion
							</th>
							<th>
								Presentacion
							</th>
							<th>
								Precio
							</th>
						</tr>
					</thead>	
					<tbody>
						<?php
							while ($row = mysql_fetch_row($result)){   
						   echo "<tr>" 
				           ."<td>".$row[1]."</td>" 
				           ."<td>".$row[2]."</td>"
				           ."<td>".$row[3]."</td>"
				           ."<td>".$row[4]."</td>"; 
				 			 } 							
						?>
					
					</tbody>
				</table>	
				<p></p>
				<p></p>
				<p></p>
				<p></p>
				
			</div>
		</div>	
	</div>
	    
	    <div class="container">
			<div class="footer">
		    	<div class="row">
		    		<div class="col-md-6 col-md-offset-4">
		    			<font color="white">Todos los Derechos Reservados 
		    			@MBournonville @DCaro</font>
		    			
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