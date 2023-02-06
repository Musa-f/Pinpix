<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinPix</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="/pinpix/site/assets/ressources/icons/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/all.css">
</head>

<body>
    <header>
        <nav>
            <div class="div_nav">
                <img class="logo" src="../assets/ressources/icons/logo.png">
                <a href="#" class="header">
                    <h1 class="title-header">PinPix</h1>
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
                <a href="index.php">Accueil</a>
                <a href="header/contact.php">Contact</a>
                <a href="header/compte.php">Connexion</a>
            </div>
        </nav>
    </header>
