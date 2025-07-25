<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('img/logo.svg') }}" rel="icon">
    <title>MVP LiveWire - {{ $title ?? 'Page Title' }}</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet" />
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }        
    </style>
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    
    @livewireStyles
    @stack('css')
</head>

<body>

    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">

                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="{{ route('home') }}" wire:navigate>
                        <img src="{{ asset('img/logo.svg') }}" alt="" />
                    </a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">

                </div>
            </div>
        </header>
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="{{ route('home') }}" wire:navigate>Home</a>
                <a class="p-2 link-secondary" href="{{ route('parametros', ['id' => 1, 'slug' => 'maria']) }}"
                    wire:navigate>Parámetros</a>
                <a class="p-2 link-secondary" href="{{ route('inline') }}" wire:navigate>Inline</a>
                <a class="p-2 link-secondary" href="{{ route('ruta_actions') }}" wire:navigate>Actions</a>
                <a class="p-2 link-secondary" href="{{ route('home') }}">Eventos</a>
                <a class="p-2 link-secondary" href="{{ route('home') }}" wire:navigate>Volt</a>
                <a class="p-2 link-secondary" href="{{ route('home') }}">Formularios</a>
            </nav>
        </div>
    </div>
    <main class="container">
        <div class="row">{{ $slot }}</div>
    </main>
    <footer class="blog-footer">
        <p> Todos los derechos reservados - {{ date('Y') }} | Desarrollado por <a href="https://www.google.cl"
                target="_blank">Don Graff ♥</a>.</p>
    </footer  class="footer">
    <!--toast-->
    <div class="toast align-items-center text-white  border-0" role="alert" aria-live="assertive" aria-atomic="true"
        id="ventana_toast" style="position: absolute; 
        top: 10px; 
        right: 10px;">
        <div class="d-flex">
            <div class="toast-body" id="ventana_toast_body">

            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                aria-label="Close" title="cerrar"></button>
        </div>
    </div>
    <!--//toast-->
    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/funciones.js') }}"></script>
    @stack('scripts')
</body>

</html>
