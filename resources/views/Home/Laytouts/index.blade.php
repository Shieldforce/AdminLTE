<!DOCTYPE html>
<html lang="pt-br">
    @includeIf('Home.Laytouts.head')
    <body class="text-center">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            @includeIf('Home.Laytouts.header')
            @yield('content')
            @includeIf('Home.Laytouts.footer')
        </div>
        @includeIf('Home.Laytouts.javascript')
    </body>
</html>



