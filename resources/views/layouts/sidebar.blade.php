<div id="doc-menu" class="column is-2 has-background-grey-lighter menu is-mobile">
    <section class="section">
      <h1 class="title is-3 has-text-weight-semibold has-text-centered has-text-primary">LSP<br> <p class="is-size-5 has-text-weight-light secondary-font has-text-dark">Diccionario de lengua de seña peruana</p></h1>
    </section>

    <ul class="menu-list">
        <li class="pl-2">Inicio</li>
        <li><a class="menu-item" href="#">Introducción</a></li>
        <li><a class="menu-item" href="#">Buscador</a></li>
        <li class="pl-2 pt-4">
            Categorías
        </li>
        <li class="menu-item has-dropdown">
            <a class="menu-title">
                Alimentos <span class="menu-caret"></span>
            </a>
            <ul class="menu-dropdown">
                <li><a class="menu-item" href="{{ route('alimentos.varios') }}">Frutas, verduras y otros</a></li>
                <li><a class="menu-item" href="{{ route('alimentos.bebidas')}}">Bebidas</a></li>
                <li><a class="menu-item" href="{{ route('alimentos.comidas')}}">Comidas</a></li>
            </ul>
        </li>
    </ul>

  </div>