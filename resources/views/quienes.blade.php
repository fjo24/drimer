@extends('layouts.frame')
@section('title', 'Drimer Chocolates - Quienes somos')
@section('contenido')
<!-- body -->        
<link type="text/css" rel="stylesheet" href="{{asset('web/assets/css/quienes.css')}}"/>
<main>
   <div class="slider">
      <ul class="slides">
         <li>
            <img src="{{ asset('web/assets/images/slider_2.jpg') }}">
            <div class="caption center-align">
               <h5>CREADORES DE</h5>
               <h3>MOMENTOS DULCES</h3>
            </div>
         </li>
      </ul>
   </div>
   <section class="empresa">
      <div class="container">
         <div class="row">
            <div class="col s12 l6">
               <img class="responsive-img" src="{{asset('web/assets/images/quienes.jpg')}}">
               <h3>Fábrica de emociones</h3>
               <p>Ser una fábrica de emociones es más que la calidad de los ingredientes, la creatividad en el desarrollo de nuevos productos, el cuidado diseño de packaging o la inversión en maquinaria. Es crear y propiciar todo lo que sea necesario para que el regalo y degustación de nuestros productos se convierta en la oportunidad de vivir una experiencia única.</p>
               <p>Porque además del sabor lo que perdura es la situación, el lugar, el intercambio, los sentimientos y sobre todo el recuerdo. Esa emoción que todos lo que hacemos Drimer Chocolates queremos que dure para siempre.</p>
            </div>
            <div class="col s12 l6">
               <h2>NUESTRA HISTORIA</h2>
               <h3>Drimer Chocolates</h3>
               <p>Drimer Chocolates es la visión de quienes alguna vez nos atrevimos a sentir que un chocolate era mucho más que un chocolate. A pensar que debía venderse en donde hasta entonces no se vendía. A creer que podíamos competir con las primeras marcas internacionales. A planear que prestigiosas empresas se asociaran comercialmente con nosotros. Y hasta soñar que podíamos llegar otros lugares del mundo.</p>
               <p>Porque lo que comenzá como una empresa familiar en 1992, redefinió la categoría del chocolate como alimento y nos posicionó no sólo como productores de chocolates, sino como una fábrica de emociones. </p>
               <p>&nbsp;</p>
               <p class="aviso">La degustación de nuestras piezas de chocolate se convierte en una experiencia única.</p>
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