@extends('layouts.frame')
@section('title', 'Drimer Chocolates - Linea Drimer')
@section('contenido')
<!-- body -->        
<link type="text/css" rel="stylesheet" href="{{asset('web/assets/css/productos.css')}}"/>
<main>
   <section class="productos">
      <div class="container">
         <div class="row miga">
            <div class="col s12">
               <a href="">productos</a>
            </div>
         </div>
         <div class="row">
            <div class="col s12 m3">
               <ul class="collapsible" data-collapsible="accordion">
                  <li>
                     <div class="collapsible-header">
                        <a href="">
                        Bombones y barras<i class="material-icons">expand_more</i>
                        </a>
                     </div>
                  </li>
                  <li>
                     <div class="collapsible-header">
                        <a href="">
                        Cajas con bombones<i class="material-icons">expand_more</i>
                        </a>
                     </div>
                  </li>
                  <li>
                     <div class="collapsible-header">
                        <a href="">
                        Corazones de Chocolate<i class="material-icons">expand_more</i>
                        </a>
                     </div>
                  </li>
                  <li>
                     <div class="collapsible-header">
                        <a href="">
                        Chupetines de Chocolate<i class="material-icons">expand_more</i>
                        </a>
                     </div>
                  </li>
                  <li>
                     <div class="collapsible-header">
                        <a href="">
                        Flores de Chocolate<i class="material-icons">expand_more</i>
                        </a>
                     </div>
                  </li>
                  <li>
                     <div class="collapsible-header">
                        <a href="">
                        Monedas de Chocolate<i class="material-icons">expand_more</i>
                        </a>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="col s12 m9">
               <a href="">
                  <div class="col s12 m4 categoria-tarjeta">
                     <div class="hover" style="height: 248.88px;">
                        <img class="responsive-img" src="{{asset('web/assets/images/roja.jpg')}}">
                     </div>
                     <h2>Barra Roja</h2>
                  </div>
               </a>
               <a href="">
                  <div class="col s12 m4 categoria-tarjeta">
                     <div class="hover" style="height: 248.88px;">
                        <img class="responsive-img" src="{{asset('web/assets/images/2.jpg')}}">
                     </div>
                     <h2>Barra Verde</h2>
                  </div>
               </a>
               <a href="">
                  <div class="col s12 m4 categoria-tarjeta">
                     <div class="hover" style="height: 248.88px;">
                        <img class="responsive-img" src="{{asset('web/assets/images/3.jpg')}}">
                     </div>
                     <h2>Bombones Rojos</h2>
                  </div>
               </a>
               <a href="">
                  <div class="col s12 m4 categoria-tarjeta">
                     <div class="hover" style="height: 248.88px;">
                        <img class="responsive-img" src="{{asset('web/assets/images/4.jpg')}}">
                     </div>
                     <h2>Bombones Verdes</h2>
                  </div>
               </a>
               <a href="">
                  <div class="col s12 m4 categoria-tarjeta">
                     <div class="hover" style="height: 248.88px;">
                        <img class="responsive-img" src="{{asset('web/assets/images/6.jpg')}}">
                     </div>
                     <h2>Bombones Celestes</h2>
                  </div>
               </a>
               <a href="">
                  <div class="col s12 m4 categoria-tarjeta">
                     <div class="hover" style="height: 248.88px;">
                        <img class="responsive-img" src="{{asset('web/assets/images/66.jpg')}}">
                     </div>
                     <h2>Bombon Trebol x kilo</h2>
                  </div>
               </a>
               <a href="">
                  <div class="col s12 m4 categoria-tarjeta">
                     <div class="hover" style="height: 248.88px;">
                        <img class="responsive-img" src="{{asset('web/assets/images/7.jpg')}}">
                     </div>
                     <h2>Bombon Tap Blanco x kilo</h2>
                  </div>
               </a>
               <a href="">
                  <div class="col s12 m4 categoria-tarjeta">
                     <div class="hover" style="height: 248.88px;">
                        <img class="responsive-img" src="{{asset('web/assets/images/66.jpg')}}">
                     </div>
                     <h2>Bombon Tap Leche x kilo</h2>
                  </div>
               </a>
               <a href="">
                  <div class="col s12 m4 categoria-tarjeta">
                     <div class="hover" style="height: 248.88px;">
                        <img class="responsive-img" src="{{asset('web/assets/images/11.jpg')}}">
                     </div>
                     <h2>Bombón Escudo x kilo</h2>
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