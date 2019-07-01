
<!doctype html>
<html lang="pt-BR" ng-app="FullStackTestApp">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Seraph Full Stack Teste">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Seraph Full Stack Test</title>
        <link href="css/app.css" rel="stylesheet">
        <link href="js/alertify/build/css/alertify.min.css" rel="stylesheet">

    </head>
    <body ng-controller="FullStackTestController" ng-init="getImages">

        <!-- Início Menu Superior -->
        @section('menu-superior')
        @show
        <!-- Fim Menu Superior -->

        <main role="main" class="h-100">

            <!-- Início Menu Superior -->
            @yield('primeiro-bloco')
            <!-- Fim Menu Superior -->

            <!-- Início Primeiro Bloco -->
            @yield('segundo-bloco')
            <!-- Fim Primeiro Bloco -->

            <!-- Início Terceiro Bloco  -->
            @yield('terceiro-bloco')
            <!-- Fim Terceiro Bloco -->

            <!-- Início Footer  -->
            @yield('footer')
            <!-- Fim Footer -->

        </main>

        <script src="js/app.js"></script>
        <script src="app/services.js"></script>
        <script src="app/app.js"></script>
        <script src="app/full-stack-test-controller.js"></script>
        <script src="js/alertify/build/alertify.min.js"></script>

    </body>
</html>
