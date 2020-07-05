<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Diccionario LSP</title>
        <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css2?family=Ovo&display=swap" rel="stylesheet"> 
         <link href="https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
         <link href="https://fonts.googleapis.com/css2?family=Nixie+One&display=swap" rel="stylesheet">          

        <link rel="stylesheet" href="{{ URL::asset("css/bulma.css") }}">
        <link rel="stylesheet" href="{{ URL::asset("css/app.css") }}">

    </head>
    <body>
        <section class="hero is-fullheight">
            <div class="hero-body">
                <div class="container has-text-centered">
                  <h1 class="title title-font">
                    LSP
                  </h1>
                  <p class="subtitle">
                    Diccionario de Lengua de Señas Peruano
                  </p>
                  <div class="subtitle">
                      <a href="#" class="button is-primary">Buscar</a>
                      <a href="{{route('inicio')}}" class="button is-primary">Ingresar</a>
                  </div>
                </div>
            </div>
            <div class="hero-foot">
                <nav class="tabs is-boxed is-fullwidth">
                  <div class="container has-text-centered">
                      <p>Hecho con 💖, para mi Cosita 💕</p>
                  </div>
                </nav>
              </div>
        </section>
    </body>
</html>
