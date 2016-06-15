<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8" />
        
        <title>@yield('title', 'Just awesome.') - {{ config('app.name') }}</title>
        
        <!--[if lt IE 9]>
            <script src="{{ asset('vendor/bower/html5shiv/dist/html5shiv.min.js') }}"></script>
        <![endif]-->
        
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
        
        <link rel="stylesheet" href="{{ asset('vendor/bower/semantic/dist/semantic.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
        
        @stack('styles')
    </head>
    <body>
        <header>
            <div class="ui container">
                <h1>{{ config('app.name') }}</h1>
                <div class="ui divider"></div>
            </div>
        </header>
        
        <main>
            @yield('content')
        </main>
        
        <footer>
            <div class="ui container">
                Copyright &copy; {{ date('Y') }} {{ config('app.name') }}
            </div>
        </footer>
        
        <script src="{{ asset('vendor/bower/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bower/semantic/dist/semantic.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        
        @stack('scripts')
    </body>
</html>
