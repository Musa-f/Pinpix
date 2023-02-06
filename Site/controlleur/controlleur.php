<?php
    session_start();
    include("../modal/connect.php");
    include("../modal/insert.php");
    include("../modal/get.php");
    include("../modal/connexion_inscription.php");


    function connexion($bdd){
        $user = getMDP($bdd,"Micaelle","456michaelle");

        if(isset($_SESSION["nom"]) != null){
        }else{
            if($user != null){
                verifConnexion($bdd, $user);
            }else{
            }
        }
    }
    connexion($bdd);
    function addImage($bdd){
        if(isset($_FILES["img"])){
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

    function afficheGalerie($bdd){
        $id_gallery = getGal($bdd,$_SESSION["id"]);
        

    }
    connexion($bdd);
    addImage($bdd);
    afficheGalerie($bdd)
    
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="img" id="img">
        <input type="submit" value="aaaaaaaa">
    </form>
</body>
</html>