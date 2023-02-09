<?php
    session_start();
    include("../model/connect.php");
    include("../model/insert.php");
    include("../model/get.php");
    include("../model/connexion_inscription.php");
    include("../view/header.php");
    include("../view/footer.php");

    // TODEL3

    function connexion($bdd){
        if(isset($_POST["mail_connect"]) and isset($_POST["mdp_connect"])){
            $mail = $_POST["mail_connect"];
            $mdp = $_POST["mdp_connect"];

            $user = getMDP($bdd, $mail, $mdp);
            $user = $user->fetch();
    
            if(isset($_SESSION["nom"]) != null){
    
            }else{
                if($user != null){
                    verifConnexion($bdd, $user);
                }else{
                    echo "mdp ou user incorrect";
                }
            }
        }elseif(isset($_POST["nom"]) and isset($_POST["mail"]) and isset($_POST["mdp"])){
            $mail = $_POST["mail"];
            $mdp = $_POST["mdp"];

            $user = getMDP($bdd, $mail, $mdp);
            $user = $user->fetch();
    
            if(isset($_SESSION["nom"]) != null){
    
            }else{
                if($user != null){
                    verifConnexion($bdd, $user);
                }else{
                    echo "mdp ou user incorrect";
                }
            }
        }
    }

    function verifInscription($bdd){
        if(isset($_POST["nom"]) and isset($_POST["mail"]) and isset($_POST["mdp"])){
            $nom = $_POST["nom"];
            $mail = $_POST["mail"];
            $mdp = $_POST["mdp"];
            $verifmail = getAllUserByName($bdd, $mail);
            $verifmail = $verifmail -> fetchAll();
            $verifnom = getAllUserByName($bdd, $nom);
            $verifnom = $verifnom -> fetchAll();
            if(count($verifmail) == 0 and count($verifnom) == 0){
                insertUser($bdd,$nom, $mdp, $mail, 1, 10);
                createGal($bdd,$nom, "cice set ma galery");
                $id_gallery = getIdGal($bdd,$nom);
                $id_gallery = $id_gallery -> fetch();
                $id_gallery = $id_gallery["id_gallery"];
                $id_user = getAllUserByName($bdd, $nom);
                $id_user = $id_user -> fetch();
                $id_user = $id_user["id_user"];
                insertUserGal($bdd, $id_gallery, $id_user);
            }else{
                echo "l'email ou l'utilisateur existe déjà";
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
    
    function afficheUserGalerie($bdd, $id_user){
        //on cherche l ID de la galerie
        $id_gallery = getGal($bdd,$id_user);
        $id_gallery = $id_gallery -> fetch();
        //on va chercher le lien des images
        $img = getImg($bdd,$id_gallery["id_gallery"]);
        $img = $img -> fetchAll();
        //on va chercher le nom de l'utilisateur à qui appartient l'image
        $nom_user = getAllUserById($bdd, $id_user);   
        $nom_user = $nom_user ->fetch();
        $nom_user = $nom_user["name_user"];
        if(count($img) == 0){
            echo "l'utilisateur n'a pas de tag";
        }else{
        //on parcour le tableau img et on affiche les images par leur lien
        foreach($img as $key => $value){
        $value = $value["url_image"];
        echo "<br> $nom_user <br> <img class='test' src='$value'> ";
        }

        }
    }

    function rechercheGalUser($bdd){
        //on vérifie si l'input à été envoyé 
        if(isset($_GET["recherche"]) and $_GET["recherche"] != null){
            $recherche = $_GET["recherche"];
            //on va chercher l user par le nom
            $id_user = getAllUserByName($bdd, $recherche);
            $id_user = $id_user->fetch();
            if($id_user != null){
            //on va afficher la galerie par l user ID
            afficheUserGalerie($bdd, $id_user["id_user"]);
            }else{
                echo "utilisateur n'éxiste pas";
            }
        }else{
            echo "vous n'avez pas mis de tag";
        }
    }
//  On a lié les pages au controleur grâce à un faux formulaire
if(isset($_GET["page"])){
    $page = "connexion";
    switch($page){
        case "connexion":
            $css = $page;
            $page.=".php";
            include("../view/$page");
        case "accueil":
            $css = $page;
            $page.=".php";
            include("../view/$page");
        case "inscription":
            $css = $page;
            $page.=".php";
            include("../view/$page");
        case "connexion":
            $css = $page;
            $page.=".php";
            include("../view/$page");
        case "contact":
            $css = $page;
            $page.=".php";
            include("../view/$page");
        case "dashboard":
            $css = $page;
            $page.=".php";
            include("../view/$page");
        case "follows":
            $css = $page;
            $page.=".php";
            include("../view/$page");
        case "galerie":
            $css = $page;
            $page.=".php";
            include("../view/$page");
        case "profil":
            $css = $page;
            $page.=".php";
            include("../view/$page");
        case "recherche":
            $css = $page;
            $page.=".php";
            include("../view/$page");
    }
}else{
    $page.="accueil";
    $css = $page;
    $page.=".php";
    include("../view/$page"); 
}    
    
    
?>