<nav class="fh5co-nav" role="navigation">
    <!-- <div class="top-menu"> -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center logo-wrap">
                <div id="fh5co-logo"><a href="index.html">Aly<span>.</span>Restaurante</a></div>
            </div>
            @php
                $path_atual = \Request::getRequestUri();
                $menus = array(
             ["nome" => "Início", "url" => "/"],
             ["nome" => "Cardápio", "url" => "/cardapio"],
             ["nome" => "Sobre", "url" => "/sobre"],
             ["nome" => "Contato", "url" => "/contato"]);

            @endphp
            <div class="col-xs-12 text-center menu-1 menu-wrap">
                <ul>
                    @foreach($menus as $menu)
                        @if($path_atual == strtolower($menu["url"]))
                            <li class="active"><a href="{{$menu["url"]}}">{{$menu["nome"]}}</a></li>
                        @else
                            <li><a href="{{$menu["url"]}}">{{$menu["nome"]}}</a></li>
                        @endif

                    @endforeach
                </ul>
            </div>
        </div>

    </div>
    <!-- </div> -->
</nav>