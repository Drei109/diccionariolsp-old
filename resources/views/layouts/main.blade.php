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

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
        <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>

    </head>
    <body>
        <body>
            <div class="mobile-burger burger is-hidden-desktop" data-target="#doc-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="columns is-gapless">
              @include('layouts.sidebar')
              <div class="column">
                <div class="hero is-dark">
                  <div class="hero-body">
                    <div class="container has-text-centered">
                      <h1 class="title is-2 is-spaced has-text-weight-semibold">LSP.</h1>
                      <h2 class="subtitle is-6 has-text-weight-light">Diccionario de Lengua de Señas Peruana.</h1>
                      </div>
                    </div>
                  </div>
                  <section class="section">
                    <div class="container is-fluid">
                      @yield('content')


                      {{-- <ul class="step-text">
                        <li>
                          <h6 class="title is-6">node and npm</h6>
                          <p>Installation guide of node can be found <a href="https://nodejs.org/en/" target="_blank">here</a>. As npm comes bundled with node, separate installation of npm is not needed.<br />
                          If you have installed them, just checkout to the root folder and run the following command.</p>
                          <p><figure class="highlight"><pre><code class="language-shell" data-lang="shell">npm install</code></pre></figure></p>
                          <p>You can see that a folder <code>node_modules</code> is generated in your root folder with all dependencies files! </p>
                        </li>
                      </ul>
                      <h6 class="title is-5 has-text-centered"><span class="icon has-text-success">
                        <i class="fas fa-thumbs-up"></i>
                      </span> You are now ready to customize Doku.</h6>
          
                      <a href="#compilation" id="compilation" class="title is-4 has-text-weight-normal is-spaced anchor">
                        <span class="anchor-name">Compilation</span>
                      </a>
          
                      <ul>
                        <li>
                          <h6 class="title is-6">Compile only</h6>
                          <p><figure class="highlight"><pre><code class="language-shell" data-lang="shell">jekyll</code></pre></figure></p>
                          <p class="helper">Compile your site and export it into the <code>/doc</code> folder.</p>
                        </li>
                        <li>
                          <h6 class="title is-6">Compile and Test</h6>
                          <p><figure class="highlight"><pre><code class="language-shell" data-lang="shell">jekyll serve</code></pre></figure></p>
                          <p>Compile your site and run a local server to test it.</p>
                        </li>
                      </ul> --}}
          
                    </div>
                  </section>
                </div>
              </div>
            <script src="{{ URL::asset("js/app.js") }}"></script>            
        </body>


        {{-- <div class="">
            <div class="is-full-height columns is-gapless">
                <div class="is-full-height column is-3 menu-main pb-6">
                    <aside class="menu pt-5 pl-5 has-text-white">
                        <h2 class="is-size-1 my-5">LSP.</h2>
                        <p class="menu-label">
                            INICIO
                        </p>
                        <ul class="menu-list">
                            <li><a>Introducción</a></li>
                            <li><a>Buscar</a></li>
                        </ul>
                        <p class="menu-label">
                            CATEGORÍAS
                        </p>
                        <ul class="menu-list">
                            <li>
                                <a>1. Alimentos</a>
                                <ul>
                                    <li><a>1.1 Frutas, verduras y otros</a></li>
                                    <li><a>1.2 Bebidas</a></li>
                                    <li><a>1.3 Comidas</a></li>
                                </ul>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="column is-9 has-background-dark">
                    <aside class="pt-5 pl-5">
                        COLECCIONES
                    </aside>
                </div>
            </div>
        </div>    --}}
        
        {{-- @include('layouts.sidebar')
        <div class="container">
            @yield('content')
        </div> --}}

    </body>
</html>
