@extends('layouts.frame')
@section('title', 'Drimer Chocolates - Linea Drimer')
@section('contenido')
<!-- body -->        
<link type="text/css" rel="stylesheet" href="{{asset('web/assets/css/distribuidores.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('web/assets/css/productos.css')}}"/>
<main>
   <!-- Modal Structure -->
   <section class="modal-section">
      <div id="modal1" class="modal modal-fixed-footer">
         <div class="modal-header">
            <a class="modal-action modal-close cerrar right" style="margin-top: 15px; margin-right: 15px;">CERRAR X</a>
         </div>
         <div class="modal-body row" style="margin: 0">
            <h2>Ingresar</h2>
            <p>Ingresá los siguientes datos para ver los precios.</p>
            <form method="POST" action="http://www.osolelaravel.com/drimer/login/invitado" accept-charset="UTF-8">
               <input name="_token" type="hidden" value="rBgG6ym8CGJNB3ZLQdNYDaEQ6abH4CZy9wFd64Sx">
               <div class="col s12">
                  <div class="row mayorista">
                     <div class="input-field col s12 l6">
                        <input class="validate" name="usuario" type="text">
                        <label for="usuario">Usuario</label>
                     </div>
                     <div class="input-field col s12 l6">
                        <input name="password" type="password" value="">
                        <label for="password">Contraseña</label>
                     </div>
                  </div>
                  <div class="col s12">
                     <input class="boton right invitado mayorista" type="submit" value="ingresar">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </section>
   <section class="distribuidores">
      <div class="container">
         <div class="row">
            <div class="col s12">
            </div>
            <div class="col s6">
               <h2>Vendé Drimer</h2>
               <h3>¿QUERÉS VENDER DRIMER EN TU LOCAL?</h3>
               <p>Gracias por elegirnos!</p>
            </div>
            <div  class="col s6">
               <a class="enlace-dis" >Ya estoy registrado (Iniciar sesión)</a>
               <form method="POST" action="http://www.osolelaravel.com/drimer/login/invitado" accept-charset="UTF-8">
                  <input name="_token" type="hidden" value="rBgG6ym8CGJNB3ZLQdNYDaEQ6abH4CZy9wFd64Sx">
                  <div class="col s12">
                     <div class="row mayorista">
                        <div class="input-field ">
                           <input class="validate" style="margin-bottom:0px" name="usuario" type="text">
                           <label for="usuario">Usuario</label>
                        </div>
                        <div class="input-field ">
                           <input name="password" type="password" value="">
                           <label for="password">Contraseña</label>
                        </div>
                     </div>
                     <div class="">
                        <input class="boton right invitado mayorista" type="submit" value="ingresar">
                     </div>
                  </div>
               </form>
            </div>
            <div class="col s12" style="margin-bottom: 30px;">
               <ul class="col s12 l6">
                  <li><i class="material-icons" style="color: #BE0000; margin-right: 10px;">check</i>Mínimo de compra $3800 +iva</li>
                  <li><i class="material-icons" style="color: #BE0000; margin-right: 10px;">check</i>Descuentos y beneficios</li>
                  <li><i class="material-icons" style="color: #BE0000; margin-right: 10px;">check</i>Envío gratis a en CABA o GBA dentro de las 72 hs.</li>
               </ul>
               <ul class="col s12 l6">
                  <li><i class="material-icons" style="color: #BE0000; margin-right: 10px;">check</i>Pago a efectivo contra entrega</li>
                  <li><i class="material-icons" style="color: #BE0000; margin-right: 10px;">check</i>Envíos al interior del país con transportes refrigerados</li>
                  <li><i class="material-icons" style="color: #BE0000; margin-right: 10px;">check</i>Pago por adelantado 100%, el envío se paga cuando llega</li>
               </ul>
            </div>
            <p>Para poder vender Drimer Chocolates en tu local, completa el siguiente formulario.</p>
            <p><span class="red-text">*</span> Campos Obligatorios</p>
            <div class="col s12 l12 no-padding">
               <form method="POST" action="http://www.osolelaravel.com/drimer/adm/distribuidores" accept-charset="UTF-8">
                  <input name="_token" type="hidden" value="rBgG6ym8CGJNB3ZLQdNYDaEQ6abH4CZy9wFd64Sx">
                  <div class="col s12 l6 no-padding">
                     <div class="input-field col s12">
                        <input class="validate" required name="usuario" type="text">
                        <label for="usuario">* Usuario</label>
                     </div>
                     <div class="input-field col s12">
                        <input name="password" type="password" value="">
                        <label for="password">* Contraseña</label>
                     </div>
                     <div class="input-field col s12">
                        <input class="validate" required name="nombre" type="text">
                        <label for="nombre">* Nombre</label>
                     </div>
                     <div class="input-field col s12">
                        <input class="validate" required name="apellido" type="text">
                        <label for="apellido">* Apellido</label>
                     </div>
                     <div class="input-field col s12">
                        <input class="validate" required name="nombre_local" type="text">
                        <label for="nombre">* Nombre del local</label>
                     </div>
                     <div class="input-field col s12">
                        <input class="validate" required name="direccion_local" type="text">
                        <label for="direccion_local">* Dirección del local</label>
                     </div>
                     <div class="input-field col s12">
                        <input class="validate" required name="horarios" type="text">
                        <label for="horarios">* Horarios de recepción</label>
                     </div>
                     <div class="input-field col s12">
                        <input class="validate" required name="localidad" type="text">
                        <label for="nombre">* Localidad</label>
                     </div>
                     <div class="input-field col s12">
                        <input class="validate" required name="provincia" type="text">
                        <label for="provincia">* Provincia</label>
                     </div>
                     <div class="input-field col s12">
                        <input class="validate" required name="postal" type="text">
                        <label for="nombre">* Código postal</label>
                     </div>
                  </div>
                  <div class="col s12 l6 no-padding">
                     <div class="input-field col s12">
                        <input class="validate" required name="telefono" type="text">
                        <label for="telefono">* Teléfono</label>
                     </div>
                     <div class="input-field col s12">
                        <input class="validate" required name="celular" type="text">
                        <label for="nombre">* Celular</label>
                     </div>
                     <div class="input-field col s12">
                        <input class="validate" required name="email" type="email">
                        <label for="email">* Email</label>
                     </div>
                     <div class="input-field col s12">
                        <input class="validate" name="razon" type="text">
                        <label for="razon">Razón social</label>
                     </div>
                     <div class="input-field col s12">
                        <input class="validate" required name="direccion_legal" type="text">
                        <label for="direccion_legal">* Dirección legal</label>
                     </div>
                     <div class="input-field col s12">
                        <input class="validate" required name="cuit" type="text">
                        <label for="cuit">* CUIT</label>
                     </div>
                     <div class="input-field col s12">
                        <input class="validate" name="web" type="text">
                        <label for="web">Web</label>
                     </div>
                     <div class="input-field col s12">
                        <input class="validate" name="facebook" type="text">
                        <label for="facebook">Facebook</label>
                     </div>
                     <div class="input-field col s12">
                        <input class="validate" name="instragam" type="text">
                        <label for="instragam">Instragam</label>
                     </div>
                     <div class="col s12 no-padding">
                        <div class="col s12">
                           <div class="g-recaptcha" data-sitekey="6LekR0oUAAAAAIWqoiVKL45XRJodoQEl0dILe5X2"></div>
                        </div>
                        <div class="col s12">
                           <button class="boton" type="submit" name="action">Enviar
                           </button>
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
@endsection