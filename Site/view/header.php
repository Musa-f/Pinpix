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
                    <div class="col-10 form-group">
                        <input type="text" name="recherche" id="recherche" placeholder="rechercher" class="form-control">
                    </div>

                    <div class="col-2 form-group flex">
                        <button type="submit" name="submit" class="btn justify-content-start">
                            <i class="bi bi-search text-white"></i>
                        </button>
                    </div>
                </div>
            </form>

            <div class="onglets">
                <a href="index.php">Accueil</a>
                <a href="header/contact.php">Contact</a>
                <a href="header/compte.php">Compte</a>
            </div>
        </nav>
    </header>

