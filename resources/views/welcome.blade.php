@extends('layouts.frame')
@section('title', 'Drimer Chocolates - Home')
@section('contenido')
<!-- body -->        
<link type="text/css" rel="stylesheet" href="{{asset('web/assets/css/welcome.css')}}"/>
<main>
   <div class="slider">
      <ul class="slides">
         <li>
            <img src="{{asset('web/assets/images/avellanas.jpg')}}">
            <div class="caption center-align">
               <h5>
                  <p><span style="color:#2b130f">OTOÑO 2018</span></p>
               </h5>
               <h3>
                  <p><span style="color:#2b130f"><strong>CHOCOLATE CALIENTE</strong></span></p>
               </h3>
            </div>
         </li>
         <li>
            <img src="{{asset('web/assets/images/fabrica.png')}}">
            <div class="caption left-align">
            </div>
         </li>
      </ul>
   </div>
   <section class="sabor">
      <div class="container row">
         <div class="col s12 l6">
            <img src="{{asset('web/assets/images/chocolates.png')}}">
         </div>
         <div class="col s12 l6">
            <h2>DESCRUBRÍ EL SABOR</h2>
            <h3>Fábrica de Emociones</h3>
            <p>En Drimer Chocolates contamos con una variada y extensa gama de productos para satisfacer los paladares más exigentes. Nuestra Fábrica de Emociones crea todo lo necesario para que el regalo y degustación de nuestros productos se convierta en la oportunidad de vivir una experiencia única.</p>
            <a href="">
               <div class="boton">NUESTRA HISTORIA</div>
            </a>
         </div>
      </div>
   </section>
   <section class="destacados">
      <div class="container">
         <div class="row">
            <div class="col s12 l8 no-padding">
               <a href="">
                  <div class="col s12 l6">
                     <div class="card">
                        <div class="card-image">
                           <img src="{{asset('web/assets/images/destacado_destacado_2.jpg')}}">
                           <span class="card-title"><span>línea drimer</span><br>chocolates y bombones</span>
                        </div>
                     </div>
                  </div>
               </a>
               <a href="http://www.osolelaravel.com/drimer/productos_logo">
                  <div class="col s12 l6">
                     <div class="card">
                        <div class="card-image">
                           <img src="{{asset('web/assets/images/destacado_destacado_3.jpg')}}">
                           <span class="card-title"><span>línea empresas</span><br>chocolates con logos</span>
                        </div>
                     </div>
                  </div>
               </a>
               <a href="">
                  <div class="col s12">
                     <div class="card">
                        <div class="card-image">
                           <img src="{{asset('web/assets/images/destacado_destacado_4.jpg')}}">
                           <span class="card-title"><span>distribuidores</span><br>vender drimer chocolates en tu local</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="col s12 l4 no-padding">
               <a href="http://osolelaravel.com/drimer/donde">
                  <div class="col s12">
                     <div class="card">
                        <div class="card-image">
                           <img src="{{asset('web/assets/images/destacado_destacado_1.jpg')}}">
                           <span class="card-title"><span>comercios adheridos</span><br>¿dónde comprar?</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </section>
</main>
<script type="text/javascript">
   $(document).ready(function(){
     $('.slider').slider();
   });
</script>
@endsection