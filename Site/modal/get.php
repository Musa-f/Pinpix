<?php
function getMDP($bdd,$name_user,$pwd_user){
    try{
        $req = $bdd->prepare("SELECT id_user FROM users where name_user = :name_user and pwd_user = :pwd_user");
        $req->execute(array(
            "name_user" => $name_user,
            "pwd_user" => $pwd_user
        ));
        return $req->fetch(); 

    }catch(Exception $e){
        die("error : ".$e->getMessage());
    }
}

function selectUser($bdd, $id_user){
    try{
        $req = $bdd->prepare("SELECT * FROM users where id_user = :id_user");
        $req->execute(array(
            "id_user" => $id_user
        ));
        return $req->fetch(); 

    }catch(Exception $e){
        die("error : ".$e->getMessage());
    }
}

function getIdImg($bdd,$url_image){
    try{
    $req = $bdd->prepare("SELECT id_image FROM images where url_image = :url_image");
    $req->execute(array(
        "url_image" => $url_image
    ));
    return $req;
    }catch(Exception $e){
        die("error : ".$e->getMessage());
    }
}

function getImg($bdd,$id_gallery){
    try{
    $req = $bdd->prepare(
        "SELECT url_image FROM images
        WHERE id_image in (SELECT id_image FROM links WHERE id_gallery = :id_gallery)");
    $req->execute(array(
        "id_gallery" => $id_gallery
    ));
    return $req;
    }catch(Exception $e){
        die("error : ".$e->getMessage());
    }
}

function getGal($bdd,$id_user){
    $req = $bdd->prepare(
        "SELECT id_gallery FROM gallery
         WHERE id_gallery in (SELECT id_gallery FROM give WHERE id_user = :id_user)");
    $req->execute(array(
        "id_user" => $id_user
    ));
    return $req;
}

function getLink($bdd, $id_image, $id_gallery){
    $req = $bdd->prepare(
        "SELECT id_gallery from links where id_image = :id_image and id_gallery = :id_gallery");
    $req->execute(array(
        "id_image" => $id_image,
        "id_gallery" => $id_gallery
    ));
    return $req;
}
?>