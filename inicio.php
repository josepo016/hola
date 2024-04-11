
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/login.css">

</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">



                <form  method="post" action="login.php" autocomplete="on"  class="formulario__login"> 
                                <h2>Ingresar</h2> 
								<hr>
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Tu usuario </label>
                                    <input id="username" name="username" required="required" type="text"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Tu contraseña </label>
                                    <input id="password" name="password" required="required" type="password"/> 
                                </p>
                                <p class="login button"> 
                                    <input type="submit" name="login" value="Ingresar" /> 
								</p>
                              
                            </form>




            

                

                    <form  action="signup_save.php" method="post" autocomplete="on" class="formulario__register"> 
                                <h2> Formulario de Registro </h2> 
								<hr>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Tu usuario</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="Usuario" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Tu contraseña </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="Contraseña"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="u">Nombre </label>
                                    <input id="passwordsignup" name="firstname" required="required" type="text" placeholder="Nombre"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="u">Apellido </label>
                                    <input id="passwordsignup" name="lastname" required="required" type="text" placeholder="Apellidos"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="">Tu género </label>
									<select id="passwordsignup"  name="gender">
										<option></option>
										<option>Hombre</option>
										<option>Mujer</option>
                                        <option>Otro</option>
									</select>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Registar"/> 
								</p>
                                
                            </form>




                </div>
            </div>

        </main>

        <script src="JS/scrip.js"></script>
</body>
</html>