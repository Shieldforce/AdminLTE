<!DOCTYPE html>
<html lang="{{ env('locale') }}">
    @includeIf('Painel.Layouts.head')
    <body id="body" class="hold-transition skin-purple sidebar-minin">
        <div class="wrapper">
            @includeIf('Painel.Layouts.header')
            @includeIf('Painel.Layouts.sidebarLateral')
            @yield('content')
            @includeIf('Painel.Layouts.footer')
            @includeIf('Painel.Layouts.javascript')
        </div>
    </body>
</html>
