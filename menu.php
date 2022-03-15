<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog || D.A.R.R</title>
    <link rel="stylesheet" href="css/stilos.css">
</head>
<body>
    <div class="navegacion">
        <div class="menuToggle"></div>
        <ul>
            <li class="lista active" style="--clr: #f00;">
                <a href="index.php">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="text">Inicio</span>
                </a>
            </li>
            <li class="lista" style="--clr: #36cbbe;">
                <a href="#">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="text">Sobre Mi</span>
                </a>
            </li>
            <li class="lista" style="--clr: #f9ca3f;">
                <a href="anime.php">
                    <span class="icon"><ion-icon name="happy-outline"></ion-icon></span>
                    <span class="text">Top Anime</span>
                </a>
            </li>
            <li class="lista" style="--clr: #287bff;">
                <a href="pelicula.php">
                    <span class="icon"><ion-icon name="videocam-outline"></ion-icon></span>
                    <span class="text">Top Pelicula</span>
                </a>
            </li>
            <li class="lista" style="--clr: #559955;">
                <a href="series.php">
                    <span class="icon"><ion-icon name="play-circle-outline"></ion-icon></span>
                    <span class="text">Top Serie</span>
                </a>
            </li>
        </ul>
    </div>

    <!--main-->
    <div class="main">
        <div class="topbar">
            <div class="logo">
                <a href="#">Blog <span><br> T.O.P</span></a>
            </div>
            <!--Buscar-->
            <div class="buscar">
                <label for="">
                    <input type="text" placeholder="Buscar">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
            <!--img-->
            
            <div class="user">
                <div class="user-text"> 
                    <h2 class="text-center"><span class="badge badge-primary"></span></h2>

                </div>
                <div class="user-img">
                <img src="img/user.jpg" alt=""> 
                    <li class="lista2">   <!--Boton SERVICIOS-->
                        <ul> <!--Sub Botones-->
                            <li><a href="" class="btn-lista">Perfil</a></li>
                            <li><a href="" class="btn-lista">Configuracion</a></li>
                            <li><a href="" class="btn-lista">Cerrar</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>