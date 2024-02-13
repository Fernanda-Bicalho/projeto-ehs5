<!DOCTYPE html>
<html lang="pt-br">

@include('templates.header')
@include('templates.navbar')

<body>
    <main>
         @yield('conteudo')
    </main>
</body>

@include('templates.footer')

</html>
