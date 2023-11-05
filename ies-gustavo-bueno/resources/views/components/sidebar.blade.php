<?php
$links=[
    [
        "name"=>"El centro",
        "route"=>"inicio",
        "contains" => [
               ["name"=> "Instituto Gustavo Bueno","route"=>"inicio"],
               ["name"=> "Ideario","route"=>"ideario"],
               ["name"=> "Valores educativos","route"=>"valores"],
               ["name"=> "Señas de identidad","route"=>"identidad"],
        ]
    ],
    [
        "name"=>"Oferta Educativa",
        "route"=> "oferta"
    ],
    [
        "name"=>"Planes Educativos",
        "route"=> "planes"
    ],
    [
        "name"=>"Organigrama",
        "route"=>"org",
        "contains" => [
               ["name"=> "Organigrama del Instituto","route"=>"organigrama"],
               ["name"=> "Organos de gobierno","route"=>"gobierno"],
               ["name"=> "Reglamento","route"=>"reglamento"]
        ]
    ],
    [
        "name"=>"Proyectos de Innovación docente",
        "route"=> "proyectos"
    ],
    [
        "name"=>"Propuesta didáctica",
        "route"=> "propuesta"
    ],
];

$routeName = Route::currentRouteName();
?>


<aside class="bd-sidebar">
    <nav class="bd-links collapse show" id="bd-menu-side" aria-label="Menu Navigation">
        <ul class="list-unstyled mb-0 py-3 pt-md-1">

        
<!-- Comprobamos si existen los links -->
@if (isset($links))
    <!-- En caso afirmativo recorremos los elementos -->
    @foreach($links as $link)
        <li class="mb-1">

        <!-- Comprobamos si es una sección o un link, en caso de ser sección, recorreremos la colección -->

        @if(isset($link['contains']))
            @php
            $isActive=false;
            foreach($link['contains'] as $sublink){ 
                if ($sublink['route']==$routeName){ 
                    $isActive=true; 
                }
            }
            @endphp
            <button class="btn d-inline-flex align-items-center rounded @if(!$isActive) collapsed @endif" data-bs-toggle="collapse" data-bs-target="#{{$link['route']}}-collapse" aria-expanded= @if($isActive)"true" @else "false" @endif>
                {{$link['name']}}
            </button>
            <div class="collapse @if($isActive) show @endif" id="{{$link['route']}}-collapse">
                <ul class="list-unstyled fw-normal pb-1 small">
                    @foreach($link['contains'] as $sublink)
                    <li>
                        <a href="{{route($sublink['route'])}}" class="d-inline-flex align-items-center rounded @if($sublink['route']==$routeName) active @endif">{{$sublink['name']}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        @else
            <a href="{{route($link['route'])}}" class="d-inline-flex align-items-center rounded @if($link['route']==$routeName) active @endif">{{$link['name']}}</a>
        @endif

        </li>
    @endforeach
@endif

        </ul>
    </nav>
</aside>

