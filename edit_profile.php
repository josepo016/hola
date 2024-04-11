<?php include('header.php'); ?>    
<?php include('session.php'); ?>    
    <body>
	<?php include('navbar.php'); ?>
	<link rel="stylesheet" href="/redsocial/css/nombres.css">

			<div id="masthead">  
				<div class="container">
					    <div class="row">
      <div class="col-md-2">
		<hr>
		<center><img class="pp" src="<?php echo $image; ?>" height="140" width="160"></center>
		<hr>
		<button class="btn btn-success">Cambiar Foto de Perfil</button>
      </div>
		<div class="col-md-10" class="contenedor">
			container
			<?php
	$query = $conn->query("select * from members where member_id = '$session_id'");
	$row = $query->fetch();
	$id = $row['member_id'];
	?>
	<hr>
					<form method="post" action="save_edit.php" class="nombre">
	<input type="hidden" name="member_id" value="<?php echo $id; ?>"><h2>
	Usuario:</h2><input type="text" name="username" class="nombre" value="<?php echo $row['username']; ?>">
	<hr>
	<h2>Nombre:</h2><input type="text" name="firstname" class="nombre" value="<?php echo $row['firstname']; ?>">
	<hr>
	<h2>Apellido:</h2><input type="text" name="lastname" class="nombre" value="<?php echo $row['lastname']; ?>">
	<hr>
	<h2>Género:</h2>
	<select name="gender" >
		<div class="g" class="nombre">
		<option><?php echo $row['gender']; ?></option>
		<option>Hombre</option>
		<option>Mujer</option>
		</div>
	</select>
	<hr>
	<h2>Fecha de Nacimiento:</h2><input name="birthdate"  type="text" class="nombre" value="<?php echo $row['birthdate']; ?>">
	<hr>
	<h2> Dirección: <h2><input name="address" type="text" class="nombre" value="<?php echo $row['address']; ?>">
	<hr>
	<h2>Estado:<h2><input name="status" type="text" class="nombre" value="<?php echo $row['status']; ?>">
	<hr>
	<h2>Móvil:<h2><input name="mobile" type="text" class="nombre" value="<?php echo $row['mobile']; ?>">
	<hr>
	<h2>Trabajo:<h2><input name="work" type="text" class="nombre" value="<?php echo $row['work']; ?>">
	<hr>
	<h2>Religión:<h2><input name="religion" type="text" class="nombre" value="<?php echo $row['religion']; ?>">
	<hr>
	<br>
			<center>
			<button name="save" class="btn edit">Guardar</button>
			</center>
	<br>
	<form>
		</div>

    </div> 
				</div><!-- /cont -->
				<div class="container">
					<div class="row">
					<div class="col-md-12">
						<div class="top-spacer"> </div>
					</div>
					</div> 
				</div><!-- /cont -->
			</div>

                                                
                                                                                
<?php include('footer.php'); ?>
        
    </body>
</html>