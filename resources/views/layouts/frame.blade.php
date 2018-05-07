<!doctype html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <title>
         @yield('title')
      </title>
      <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
      <!-- CSS MATERIALIZE -->
      <!-- ICONOS MATERIALIZE -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="{{asset('web/materialize/css/materialize.min.css')}}"  media="screen,projection"/>
      <!-- ESTILO -->
      <link rel="stylesheet" href="{{asset('web/assets/css/general.css')}}">
      <!-- LOGO FAVICON -->
      <link rel="icon" type="image/png" href="{{asset('web/assets/images/logo_favicon.png')}}"/>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="csrf-token" content="I3YUn3bw3ZaeBn99fYajYHTLoT7YaVQeAJRHkIgr">
      <!-- JQUERY -->
      <script type="text/javascript" src="{{asset('jquery/jquery.js')}}"></script>
      <!-- JS MATERIALIZE -->
      <script type="text/javascript" src="{{asset('web/materialize/js/materialize.min.js')}}"></script>
      <script src='https://www.google.com/recaptcha/api.js'></script>
   </head>
   <body>
      <!-- CABECERA -->
      <header>
         <div class="head">
            <div class="container nav-flex">
               <div class="redes">
                  <a href="/home"><img src="{{asset('web/assets/images/facebook_fb.png')}}"></a>
                  <a href="/home"><img src="{{asset('web/assets/images/instagram_ins.png')}}"></a>
               </div>
               <a href="/home"><img class="logo" style="cursor: pointer;" src="{{asset('web/assets/images/logo_principal.png')}}"></a>
               <div class="nav-elements hide-on-med-and-down">
                  <a href="/home"><i class="material-icons">search</i></a>
                  <div class="line"></div>
                  <a href="/home">
                  <i class="material-icons">add_shopping_cart</i>
                  <span class="num">24</span>
                  </a>
                  <a href="/home"><span>Mi pedido</span></a>                          
               </div>
            </div>
         </div>
         <div class="panel">
            <div class="container nav-flex">
               <a href="/quienes"><span class="">Quiénes somos</span></a>
               <a href="/productos"><span class="">Línea drimer</span></a>
               <a href=""><span class="">chocolates con logo</span></a>
               <a href="/distribuidores"><span class="">Dónde comprar</span></a>
               <a href="/"><span class="">Vendé drimer</span></a>
               <a href="/contacto"><span class="">contacto</span></a>
            </div>
         </div>
      </header>
      <!-- CUERPO -->
      @yield('contenido')
      <!-- FOOTER -->
      <footer class="page-footer">
         <div class="container">
            <div class="row">
               <div class="col l3 s12">
                  <h5>sitemap</h5>
                  <ul>
                     <li><a href="">inicio</a></li>
                     <li><a href="">Quíenes somos</a></li>
                     <li><a href="">Línea drimer</a></li>
                     <li><a href="">Chocolate con logo</a></li>
                     <li><a href="">Dónde comprar</a></li>
                     <li><a href="">Vendé drimer</a></li>
                     <li><a href="">contacto</a></li>
                  </ul>
               </div>
               <div class="col l6 s12 valign-wrapper">
                  <img class="logo-footer" src="{{asset('web/assets/images/logo_footer.png')}}">
               </div>
               <div class="col l3 s12">
                  <h5>drimer chocolates</h5>
                  <ul>
                     <li class="item-footer"><i class="material-icons">place</i><a style="text-transform: none;" href="">Plaza 3553 PB. “7” (C1430DII) CA.B.A. Buenos Aires Argentina</a></li>
                     <li class="item-footer"><i class="material-icons">phone_in_talk</i><a style="text-transform: none;" href="">+5411 4546-0300 </a></li>
                     <li class="item-footer"><i class="material-icons">email</i><a style="text-transform: none;" href="">info@drimerchocolates.com.ar</a></li>
                  </ul>
                  <h5 class="titulo-2">redes sociales</h5>
                  <div class="redes-footer">
                     <a href=""><img src="{{asset('web/assets/images/facebook_fb_bajo.png')}}"></a>
                     <a href=""><img src="{{asset('web/assets/images/instagram_ins_bajo.png')}}"></a>
                     <a href=""><img src="{{asset('web/assets/images/youtube_bajo.png')}}"></a>
                     <a href=""><img src="{{asset('web/assets/images/twitter.png')}}"></a>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <script type="text/javascript"></script>
   </body>
</html>