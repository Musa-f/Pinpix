<?php
function insertUser($bdd,$name_user, $pwd_user, $mail_user, $id_image, $id_role){

    try{
         //On insère toutes les infos de l user dans la table users
        $req = $bdd->prepare("INSERT INTO users (name_user, pwd_user, mail_user,   id_image, id_role)VALUES
        (:name_user, :pwd_user, :mail_user, :id_image, :id_role)");
        
        $req->execute(array( "name_user" => $name_user, "pwd_user" => $pwd_user, "mail_user" => $mail_user, "id_image" => $id_image, "id_role" => $id_role));
        $req->closeCursor();
    }catch(Exception $e){
        die("error : ".$e->getMessage());
    }
}

function insertIMG($bdd,$url_image){

    try{
         //On insère l'image
        $req = $bdd->prepare(
            "INSERT INTO images(url_image) VALUES
            (:url_image)"
        );
        
        $req->execute(array(
            "url_image" => $url_image
        ));
        $req->closeCursor();
    }catch(Exception $e){
        die("error : ".$e->getMessage());
    }
}
function insertGal($bdd,$id_image,$id_gallery){
    try{
         //On lie l' image par son ID à sa galerie
        $req = $bdd->prepare(
            "INSERT INTO links(id_image, id_gallery) VALUES
            (:id_image, :id_gallery)"
        );
        
        $req->execute(array(
            "id_image" => $id_image,
            "id_gallery" => $id_gallery
        ));
        $req->closeCursor();
    }catch(Exception $e){
        die("error : ".$e->getMessage());
    }
}

function createGal($bdd,$name_gallery, $description_gallery){
    try{
        //On lie le nom de la gallery a sa description
       $req = $bdd->prepare(
           "INSERT INTO gallery(name_gallery, description_gallery) VALUES
           (:name_gallery, :description_gallery)"
       );

       $req->execute(array(
           "name_gallery" => $name_gallery,
           "description_gallery" => $description_gallery
       ));

       $req->closeCursor();
   }catch(Exception $e){
       die("error : ".$e->getMessage());
   }
}
function insertUserGal($bdd,$id_gallery, $id_user){
    try{
        //On lie l'ID de gallery avec l'iD de l'utilisateur
       $req = $bdd->prepare(
           "INSERT INTO give(id_gallery, id_user) VALUES 
           (:id_gallery,:id_user)"
       );

       $req->execute(array(
           "id_gallery" => $id_gallery,
           "id_user" => $id_user 
       ));
       
       $req->closeCursor();
   }catch(Exception $e){
       die("error : ".$e->getMessage());
   }
}

function insertLike($bdd,$id_image,$id_user){
    try{
         //On lie l' image par son ID à L'id de l'user
        $req = $bdd->prepare(
            "INSERT INTO likes(id_image, id_user) VALUES
            (:id_image, :id_user)"
        );
        
        $req->execute(array(
            "id_image" => $id_image,
            "id_user" => $id_user
        ));
        $req->closeCursor();
    }catch(Exception $e){
        die("error : ".$e->getMessage());
    }
}

function insertFollow($bdd,$id_user_1,$id_user_2){
    try{
         //On lie l'id de l'utilisateur 1 a l'id de l'utilisateur 2
        $req = $bdd->prepare(
            "INSERT INTO follow(id_user_1, id_user_2) VALUES
            (:id_user_1, :id_user_2)"
        );
        
        $req->execute(array(
            "id_user_1" => $id_user_1,
            "id_user_2" => $id_user_2
        ));
        $req->closeCursor();
    }catch(Exception $e){
        die("error : ".$e->getMessage());
    }
}
