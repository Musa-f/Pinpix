<?php
    session_start();
    include("../model/connect.php");
    include("../model/insert.php");
    include("../model/get.php");
    include("../model/connexion_inscription.php");


    function connexion($bdd){
        $user = getMDP($bdd,"Micaelle","456michaelle");
        $user = $user->fetch();

        if(isset($_SESSION["nom"]) != null){
        }else{
            if($user != null){
                verifConnexion($bdd, $user);
            }else{
            }
        }
    }
    function addImage($bdd){
        if(isset($_FILES["img"]) and $_FILES["img"] != null){
            //On obtient l'image envoyée
            $tmpName = $_FILES['img']['tmp_name'];
            $name = $_FILES['img']['name'];
            $size = $_FILES['img']['size'];
            $error = $_FILES['img']['error'];
            //on bouge l'image dans le dossier des images
            $fichier = move_uploaded_file($tmpName, "../assets/ressources/img/$name");
            $verifIMG = getIdImg($bdd,"../assets/ressources/img/$name");
            if($verifIMG -> fetch() == null){
            //on insert l'image dans la base de données en lui donnant le chemin pour la récupérer
            insertIMG($bdd,"../assets/ressources/img/$name");
            }
            //on va chercher l'id de l'image
            $id_image = getIdImg($bdd,"../assets/ressources/img/$name");
            $id_image = $id_image ->fetch();
            //on va chercher l'id de la galerie de l'utilisateur grâce à l'id de l'utilisateur sauvegardé par   un cookie de session
            $id_gallery = getGal($bdd,$_SESSION["id"]);
            $id_gallery = $id_gallery->fetch();
            //on insert l'image dans la galerie de l'utilisateur
            $verifGal = getLink($bdd, $id_image["id_image"],$id_gallery["id_gallery"]);
            $verifGal = $verifGal -> fetch();
            //vérifier si la galerie de l'utilisateur a deja l'image
            if($verifGal == null){
                insertGal($bdd,$id_image["id_image"],$id_gallery["id_gallery"]);
            }else{
                echo "non";
            }
        }
    }
    
    function afficheGalerie($bdd, $id_user){
        //on cherche l ID de la galerie
        $id_gallery = getGal($bdd,$id_user);
        $id_gallery = $id_gallery -> fetch();
        //on va chercher le lien des images
        $img = getImg($bdd,$id_gallery["id_gallery"]);
        $img = $img -> fetchAll();
        if(count($img) == 0){
            echo "l'utilisateur n'a pas de tag";
        }else{
        //on parcours le tableau img et on affiche les images par leur liens
        foreach($img as $key => $value){
        $value = $value["url_image"];
        echo "<br> <img class='test' src='$value'> ";
        }

        }
    }

    function rechercheUser($bdd){
        //on vérifie si l'input à été envoyé 
        if(isset($_GET["recherche"]) and $_GET["recherche"] != null){
            $recherche = $_GET["recherche"];
            //on va chercher l user par le nom
            $id_user = selectAllUserByName($bdd, $recherche);
            $id_user = $id_user->fetch();
                //on va afficher la galerie par l user ID
                afficheGalerie($bdd, $id_user["id_user"]);
        }else{
            echo "vous n'avez pas mis de tag";
        }
    }
    connexion($bdd);
    addImage($bdd);
    afficheGalerie($bdd, $_SESSION["id"]);
    rechercheUser($bdd);
    
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/test.css">
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="img" id="img">
        <input type="submit" value="aaaaaaaa">
    </form>

    <form action="" method="get">
    <input type="text" name="recherche" id="recherche">
    <input type="submit" value="a">
    </form>
</body>
</html>