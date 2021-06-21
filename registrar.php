
<!DOCTYPE html>
<html>
<head>
	<title>
		Formulario prueba
	</title>
	<script type="text/javascript">
		function validar(){
			var form = document.form;
			if (form.Nombre.value==0) {
				alert("el campo nombre esta vacio");
				form.Nombre.value="";
				form.Nombre.focus();
				return false;
			}

			if (form.Apellidos.value==0) {
				alert("el campo Apellidos esta vacio");
				form.Apellidos.value="";
				form.Apellidos.focus();
				return false;
			}

			if (form.Direccion.value==0) {
				alert("el campo Direccion esta vacio");
				form.Direccion.value="";
				form.Direccion.focus();
				return false;
			}

			if (form.correo.value==0) {
				alert("el campo email esta vacio");
				form.correo.value="";
				form.correo.focus();
				return false;
			}

			if (form.Pasword.value==0) {
				alert("el campo Pasword esta vacio");
				form.Pasword.value="";
				form.Pasword.focus();
				return false;
			}

			if (form.Genero.value==0) {
				alert("el campo Genero esta vacio");
				form.Genero.value="";
				form.Genero.focus();
				return false;
			}

			if (form.Telefono.value==0) {
				alert("el campo Telefono esta vacio");
				form.Telefono.value="";
				form.Telefono.focus();
				return false;
			}
			alert("Datos enviados con exito");
			form.submit();
		}
	</script>

</head>
<body>
<h1>Formulario de Registro</h1><!--Titulos-->
<form name="form" action = "con_db.php" method =  "POST" onsubmit="return validar();">
    Nombre: <input type="text" name="Nombre" placeholder="Ingresa tu nombre"> <br>
	Apellidos: <input type="text" name="Apellidos" placeholder="Ingresa tus Apellidos"> <br>
	Direccion: <input type="text" name="Direccion" placeholder="Ingresa Direccion"> <br>
	correo: <input type="email" name="Correo" placeholder="Ingresa tu email"> <br>
	contraseña: <input type="Pasword" name="Contraseña" placeholder="Ingresa Pasword"> <br>
	Genero: <input type="text" name="Genero" placeholder="Ingresa Genero"> <br>
	Telefono: <input type="tel" name="Telefono" placeholder="Ingresa telefono"> <br>

<button> <a href="con_db.php" >Enviar datos</button>
<button> <a href = "Portada.php">Salir</button>
</form>
</body>
</html>