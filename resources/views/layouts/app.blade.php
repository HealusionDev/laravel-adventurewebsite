<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ mix('/js/app.js') }}"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
   
        <title>@yield('title')</title>
    </head>
    <body>
        @section('header')
            <!-- Connexion -->
            <form method="post">
                <input class="connect" type="text" name="identifiant" id="identifiant" placeholder="Identifiant">
                <input class="connect" type="text" name="password" id="password" placeholder="Password">
                <input type="submit" name="Envoyer" id="formsend">
            </form>

            <!-- Création de compte -->
            <div class="newaccount">
                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="window.location.href='newaccount.php';">Créez votre compte</button>
            </div>

            <!-- Barre de navigation -->
            <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
                <div class="container-fluid">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="about.php">About</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="team.php">Team</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                </div>
            </nav>

            <!-- Menu déroulant-->
            <div class="menu menu-expand-md bg-light">
                <div class="bloc text-center">
                    <img src="/img/header4.png">
                    <div class="dropdown">
                        <li class="mainbutton1">Gastronomie</li>
                            <div class="dropdown-child1">
                                <a href="recette.html">Recettes</a>
                                <a href="vin.html">Vin</a>
                            </div>
                    </div>
                    <div class="dropdown">
                        <li class="mainbutton1">Guide Voyage</li>
                            <div class="dropdown-child1">
                                <a href="maroc.html">Maroc</a>
                                <a href="guyane.html">Guyane</a>
                                <a href="australie.html">Australie</a>
                            </div>
                    </div>
                    <div class="dropdown">
                        <li class="mainbutton1">Expéditions</li>
                            <div class="dropdown-child1">
                                <a href="iledefrance.html">Corse : GR20 </a>
                                <a href="kilimandjaro.html">Seven Summits</a>
                                <a href="#.html">Matériel</a>
                            </div>
                    </div>
                    <div class="dropdown">
                        <li class="mainbutton1">Randonnées</li>
                            <div class="dropdown-child1">
                                <a href="iledefrance.html">Ile de France</a>
                                <a href="pyrenees.html">Pyrénées</a>
                            </div>
                    </div>
                </div>
            </div>  
        @show

        <div class="container">
            @yield('content')
        </div>

        @section('footer')
        <!-- Pied de page -->
        <footer>
            <div class="container-fluid">
                <div class="row copy text-center">
                    <div class="col-12">
                        <h5 class="display-8">&copy; mynextadventure.fr</h5>
                    </div>
                </div>
            </div>
        </footer>
        @show

    </body>
</html>