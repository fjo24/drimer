@extends('layouts.frame')

@section('title', 'Drimer Chocolates - Contacto')

@section('contenido')

<!-- body -->        
   
        

<link type="text/css" rel="stylesheet" href="{{asset('web/assets/css/contacto.css')}}"/>

	<main>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2391.493938025116!2d-58.48585595951589!3d-34.55857229513987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb68d132a4e4d%3A0xb0a053805a672718!2sDrimer+Chocolates!5e0!3m2!1ses!2sar!4v1519153447845" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			
		<section class="contacto">
			<div class="container">
				<div class="row">
					<div class="col s12">
											
					</div>
				</div>
			</div>
			<div class="container">
				<h2>Contacto</h2>
<input type="radio" class="filled-in" id="terminos" />
				<div class="row">
					<div class="col s12 l12">
						<form method="POST" action="" accept-charset="UTF-8"><input name="_token" type="hidden" value="I3YUn3bw3ZaeBn99fYajYHTLoT7YaVQeAJRHkIgr">
					      	<div class="row">
					        	<div class="input-field col s12 l6">
					          		<input class="validate" name="nombre" type="text">
					          		<label for="nombre">Nombre</label>
					        	</div>
					        	<div class="input-field col s12 l6">
					          		<input class="validate" name="apellido" type="text">
					          		<label for="apellido">Apellido</label>
					        	</div>
					      	</div>
					      	<div class="row">
					        	<div class="input-field col s12 l6">
					          		<input class="validate" name="email" type="email">
					          		<label for="email">Correo electronico</label>
					        	</div>
					        	<div class="input-field col s12 l6">
					          		<input class="validate" name="empresa" type="text">
					          		<label for="empresa">Empresa</label>
					        	</div>
					      	</div>
					      	<div class="row no-margin">
					        	<div class="input-field col s12 l6">
			          				<label for="mensaje">Mensaje</label>
			          				<textarea class="materialize-textarea" name="mensaje" cols="50" rows="10"></textarea>
					        	</div>
					        	<div class="col s12 l6">
								    <div class="col s12">
						      			<div class="g-recaptcha" data-sitekey="6LekR0oUAAAAAIWqoiVKL45XRJodoQEl0dILe5X2"></div>
							      	</div>
							      	<div class="col s12">
								      	<p class="">
									      <input type="checkbox" class="filled-in" id="terminos" />
									      <label for="terminos">Acepto los términos y condiciones de privacidad</label>
									    </p>
								    </div>
								    <div class="col s12">
								      	<button class="boton" type="" name="action">Enviar
										</button>
									</div>
					        	</div>
							</div>
					    </div>
					    </form>
					</div>
				</div>
			</div>
		</section>
	</main>

	<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>

	<script type="text/javascript">
        $('.logo').click(() => {
            window.location.href = "/drimer";
        });
    </script>

@endsection