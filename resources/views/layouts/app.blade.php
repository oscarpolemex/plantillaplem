<!doctype html>
<html lang="en">
<head>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Hello, world!</title>
</head>
<body>
<section>
    <div class="d-flex">
        <div id="sidebar-container" class="bg-primary">
            <div class="text-center mt-3">
                <img src="{{asset('img/Logoplem.png')}}" class="image align-content-center" width="80%">
                <h5 class="text-center text-light mt-2">Nombre sistema</h5>
            </div>
            <div class="menu">
                <a href="#Menu1" class="nav-tabs nav-link p-1 ml-4 mr-3"><i class="ion ion-folder mr-2"></i>Archivos</a>
                <a href="#Menu2" class="nav-tabs nav-link p-1 ml-4 mr-3"><i class="ion ion-person-stalker mr-2"></i>Usuarios</a>
                <a href="#Menu3" class="nav-tabs nav-link p-1 ml-4 mr-3"><i class="ion ion-arrow-swap mr-2"></i>Movimientos</a>
                <a href="#Menu4" class="nav-tabs nav-link p-1 ml-4 mr-3"><i class="ion ion-upload mr-2"></i>Cargas</a>
            </div>
        </div>
        <div class="ml-3 mt-2 mr-3 w-100">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#sidebar-container" aria-controls="sidebar-container" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle text-light " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false">
                                <i class="ion ion-person"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#"><i class="ion ion-person"></i> Perfil</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ion ion-power"></i> Cerrar sesion</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</section>

<div class="container">
    <div class="card">
        <div class="card-header">
            <strong>Hola</strong>
        </div>
    </div>
</div>
</body>
</html>
