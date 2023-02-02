<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinPix</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/styleall.css">
</head>

<body>
    <header>
        <nav>
            <div class="div_nav">
                <a href="#"><img class="logo" src="../assets/ressources/icons/logo.png"></a>
                <a href="#">
                    <h1>PinPix</h1>
                </a>
            </div>

            <form method="post">
                <div class="row justify-content-center">
                    <div class="col-12 form-group d-flex flex-row">
                        <input type="text" name="recherche" id="recherche" placeholder="Rechercher par tags ou nom d'utilisateur..." class="form-control">
                        <button type="submit" name="submit" class="btn ">
                            <i class="bi bi-search text-white"></i>
                        </button>
                    </div>
                </div>
            </form>

            <div class="onglets">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="header/contact.php">Contact</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </a>
                    <ul class="dropdown-menu nav-connected">
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><a class="dropdown-item" href="#">Compte</a></li>
                        <li><a class="dropdown-item" href="#">Mes follows</a></li>
                        <li><a class="dropdown-item" href="#">Se déconnecter</a></li>
                    </ul>
                </li>
            </div>
        </nav>

        
    </header>