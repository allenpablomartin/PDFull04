<section id="page">
	<div class="main"> 
		<div class="reservation_top">
			<div class=" contact_right">
				<h3>Contacto</h3>
				<div class="contact-form">
					<form action="enviar.php" method="post">
						<input type="text" class="textbox" placeholder="Nombre" name="nombre">
						<input type="text" class="textbox" placeholder="E-Mail" name="email">
						<textarea placeholder="Mensaje" name="mensaje"></textarea>
						<input type="submit" value="Enviar">
						<div class="clearfix"></div>
						<p id="respuesta"></p>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	const formulario = document.querySelector("form");
	formulario.onsubmit = function(evento){
		evento.preventDefault();

		let nombre = document.querySelector("input[name=nombre").value;
		let email = document.querySelector("input[name=email").value;
		let mensaje = document.querySelector("textarea[name=mensaje").value;

		console.log("nombre: " + nombre);
		console.log("email: " + email);
		console.log("mensaje " + mensaje);

		let datos = `nombre=${nombre}&email=${email}&mensaje=${mensaje}`;

		let boton = document.querySelector("input[type=submit]");

		boton.value = "Enviando...";
		boton.disabled = true;

		let peticion = new XMLHttpRequest();

		peticion.open("POST","enviar.php");
		peticion.setRequestHeader("Content-Type","aplication/x-www-form-urlencoded");
		peticion.onload = function(){
			//alert("loaded");
			if(peticion.status == 200) {
				//alert(peticion.response);
				document.querySelector("#respuesta").innerText = peticion.response;
				boton.value = "Enviado!";

			}
		};
		peticion.send(datos);

	};

</script>