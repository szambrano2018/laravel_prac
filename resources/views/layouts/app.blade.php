<html>
    <head>
        <title>Practica Laravel 5.6</title>
        <!-- Bootstrap -->
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
        </script>
        <!-- jQuery Vue -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
        </script>

    </head>
    <body>
        @section('menu') 
        @show
        <div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #044D93;"></div>
        <div id="app" class="container" style="padding-top: 100px;">
            @yield('content')
        </div>
        <footer class="row" style="padding-left: 130px;padding-top: 40px;">
            © 2018 - Sistema de laravel 5.6.
        </footer>
    </body>
</html>
