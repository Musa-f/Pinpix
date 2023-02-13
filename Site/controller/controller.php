<?php
session_start();
include("../model/connect.php");
include("../model/insert.php");
include("../model/get.php");
include("../model/connexion_inscription.php");

function connexion($bdd)
{
    if (isset($_POST["mail_connect"]) and isset($_POST["mdp_connect"])) {
        $mail = $_POST["mail_connect"];
        $mdp = $_POST["mdp_connect"];
        $user = getMDP($bdd, $mail, $mdp);
        $user = $user->fetch();
        if (isset($_SESSION["nom"]) != null) {
        } else {
            if (password_verify($mdp, $user["pwd_user"])) {
                verifConnexion($bdd, $user);
            } else {
                echo "mdp ou user incorrect";
            }
        }
    } elseif (isset($_POST["nom"]) and isset($_POST["mail"]) and isset($_POST["mdp"])) {
        $mail = $_POST["mail"];
        $mdp = $_POST["mdp"];
        $user = getMDP($bdd, $mail, $mdp);
        $user = $user->fetch();

        if (isset($_SESSION["nom"]) != null) {
        } else {
            if (password_verify($mdp, $user["pwd_user"])) {
                verifConnexion($bdd, $user);
                print_r($_SESSION);
            } else {
                echo "mdp ou user incorrect";
            }
        }
    }
}

function verifInscription($bdd)
{
    if (isset($_POST["nom"]) and isset($_POST["mail"]) and isset($_POST["mdp"])) {
        $nom = $_POST["nom"];
        $mail = $_POST["mail"];
        $mdp = $_POST["mdp"];
        $mdp = password_hash($mdp, PASSWORD_DEFAULT);
        $verifmail = getAllUserByName($bdd, $mail);
        $verifmail = $verifmail->fetchAll();
        $verifnom = getAllUserByName($bdd, $nom);
        $verifnom = $verifnom->fetchAll();
        if (count($verifmail) == 0 and count($verifnom) == 0) {
            insertUser($bdd, $nom, $mdp, $mail, 1, 10);
            createGal($bdd, $nom, "cice set ma galery");
            $id_gallery = getIdGal($bdd, $nom);
            $id_gallery = $id_gallery->fetch();
            $id_gallery = $id_gallery["id_gallery"];
            $id_user = getAllUserByName($bdd, $nom);
            $id_user = $id_user->fetch();
            $id_user = $id_user["id_user"];
            insertUserGal($bdd, $id_gallery, $id_user);
        } else {
            echo "l'email ou l'utilisateur existe déjà";
        }
    }
}

function addImage($bdd)
{

    if (isset($_FILES["img"]) and $_FILES["img"] != null) {
        //On obtient l'image envoyée
        $tmpName = $_FILES['img']['tmp_name'];
        $name = $_FILES['img']['name'];
        $size = $_FILES['img']['size'];
        $error = $_FILES['img']['error'];
        //on bouge l'image dans le dossier des images
        $fichier = move_uploaded_file($tmpName, "../assets/ressources/img/$name");
        $verifIMG = getIdImg($bdd, "../assets/ressources/img/$name");
        if ($verifIMG->fetch() == null) {
            //on insert l'image dans la base de données en lui donnant le chemin pour la récupérer
            insertIMG($bdd, "../assets/ressources/img/$name");
        }
        //on va chercher l'id de l'image
        $id_image = getIdImg($bdd, "../assets/ressources/img/$name");
        $id_image = $id_image->fetch();
        //on va chercher l'id de la galerie de l'utilisateur grâce à l'id de l'utilisateur sauvegardé par   un cookie de session
        $id_gallery = getGal($bdd, $_SESSION["id"]);
        $id_gallery = $id_gallery->fetch();
        //on insert l'image dans la galerie de l'utilisateur
        $verifGal = getLink($bdd, $id_image["id_image"], $id_gallery["id_gallery"]);
        $verifGal = $verifGal->fetch();
        //vérifier si la galerie de l'utilisateur a deja l'image
        if ($verifGal == null) {
            insertGal($bdd, $id_image["id_image"], $id_gallery["id_gallery"]);
        } else {
            echo "non";
        }
    }
}

function afficheUserGalerie($bdd, $id_user)
{
    $resultat = [];
    //on cherche l ID de la galerie
    $id_gallery = getGal($bdd, $id_user);
    $id_gallery = $id_gallery->fetch();
    //on va chercher le lien des images
    $img = getImg($bdd, $id_gallery["id_gallery"]);
    $img = $img->fetchAll();
    //on va chercher le nom de l'utilisateur à qui appartient l'image
    $nom_user = getAllUserById($bdd, $id_user);
    $nom_user = $nom_user->fetch();
    $nom_user = $nom_user["name_user"];


    if (count($img) == 0) {
        echo "l'utilisateur n'a pas de tag";
    } else {
        //on parcour le tableau img et on affiche les images par leur lien
        foreach ($img as $key => $value) {
            $value = $value["url_image"];
            $id_image = getIdImg($bdd, $value);
            $id_image = $id_image->fetch();
            $id_image = $id_image[0];

            $nb_likes = getLike($bdd, $id_image);
            $nb_likes = $nb_likes->fetchAll();
            if (count($nb_likes) == 0) {
                $nb_likes = 0;
            } else {
                $nb_likes = count($nb_likes);
            }

            $nb_follow = getfollow($bdd, $id_user);
            $nb_follow = $nb_follow->fetchAll();
            if (count($nb_follow) == 0) {
                $nb_follow = 0;
            } else {
                $nb_follow = count($nb_follow);
            }

            if (isset($_SESSION["id"])) {
                $BoolLike = getBoolLike($bdd, $id_image, $_SESSION["id"]);
                $BoolLike = $BoolLike->fetchAll();
                $BoolLike = $BoolLike[0];
                if ($BoolLike[0] == null) {
                    $BoolLike = "false";
                } else {
                    $BoolLike = "true";
                }

                $BoolFollow = getBoolFollow($bdd, $id_user, $_SESSION["id"]);
                $BoolFollow = $BoolFollow->fetchAll();

                $BoolFollow = $BoolFollow[0];
                if ($BoolFollow[0] == null) {
                    $BoolFollow = "false";
                } else {
                    $BoolFollow = "true";
                }


                array_push($resultat, array($nom_user, $value, $nb_follow, $nb_likes, $BoolLike, $BoolFollow));
            } else {
                array_push($resultat, array($nom_user, $value, $nb_follow, $nb_likes));
            }
        }

        }
        return $resultat;
    }
    $test = afficheUserGalerie($bdd, 2);
    print_r($test);

function afficheTagGalerie($bdd)
{
    if (isset($_POST["recherche"])) {
        $tag_name = $_POST["recherche"] . "%";
        $all_tag_name = getIdTag($bdd, $tag_name);
        $all_tag_name = $all_tag_name->fetchAll();
        foreach ($all_tag_name as $key) {
            $all_image = getAssign($bdd, $key["id_tag"]);
            foreach ($all_image as $key_2) {
                print_r($key_2);
            }
        }
        return $all_tag_name;
    }
}

function afficheIMGDate($bdd)
{
    $all = getDateImg($bdd);
    $all = $all->fetchAll();
    $resultat = [];
    foreach ($all as $key) {
        $url_img = getImg($bdd, $key["id_gallery"]);
        $url_img = $url_img->fetch();
        $url_img = $url_img["url_image"];
        $id_user = getUserbyGallery($bdd, $key["id_gallery"]);
        $id_user = $id_user->fetch();
        $name_user = getAllUserById($bdd, $id_user["id_user"]);
        $name_user = $name_user->fetch();
        $name_user = $name_user["name_user"];
        $like = getLike($bdd, $key["id_image"]);
        $like = $like->fetchAll();
        if (count($like) == 0) {
            $like = 0;
        } else {
            $like = count($like);
        }

        $follower = getfollow($bdd, $id_user["id_user"]);
        $follower = $follower->fetchAll();
        if (count($follower) == 0) {
            $follower = 0;
        } else {
            $follower = count($follower);
        }
        array_push($resultat, array($name_user, $like, $follower, $url_img));
    }
    return $resultat;
}
print_r(afficheIMGDate($bdd));

function rechercheGalUser($bdd)
{
    //on vérifie si l'input à été envoyé 
    if (isset($_GET["recherche"]) and $_GET["recherche"] != null) {
        $recherche = $_GET["recherche"];
        //on va chercher l user par le nom
        $id_user = getAllUserByName($bdd, $recherche);
        $id_user = $id_user->fetch();
        if ($id_user != null) {
            //on va afficher la galerie par l user ID
            afficheUserGalerie($bdd, $id_user["id_user"]);
        } else {
            echo "utilisateur n'éxiste pas";
        }
    } else {
        echo "vous n'avez pas mis de tag";
    }
}
//  On a lié les pages au controleur grâce à un faux formulaire
if (isset($_GET["page"])) {
    $page = $_GET["page"];
    $style = $page . ".css";
    verifInscription($bdd);
    connexion($bdd);
    include("../view/header.php");

    if (isset($_SESSION["role"])) {
        user();
        if ($_SESSION["role"] == 1) {
            admin();
        }
    } else {
        visit();
    }
    fermerNav();

    switch ($page) {
        case "dashboard":
            $style = $page;
            $page .= ".php";
            if (!isset($_SESSION) and $_SESSION["role"] != 1) {
                header("../view/accueil.php");
            }
            include("../view/$page");
            break;
        case "galerie":
            $style = $page;
            $page .= ".php";
            include("../view/$page");
            break;
        case "profil":
            $style = $page;
            $page .= ".php";
            include("../view/$page");
            break;
        case "deconnexion":
            session_destroy();
            header("refresh:0;url=controller.php?page=accueil");
            break;
        default:
            $page .= ".php";
            include("../view/$page");
    }
}else{
    $page ="accueil";
    $style = $page;
    $page .= ".php";
    verifInscription($bdd);
    connexion($bdd);
    include("../view/header.php");
    if(isset($_SESSION["role"])){
        user();
        if ($_SESSION["role"] == 1) {
            admin();
        }
    } else {
        visit();
    }
    fermerNav();
    include("../view/$page");
}

include("../view/footer.php");
