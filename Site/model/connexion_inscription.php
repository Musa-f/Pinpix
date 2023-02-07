<?php
function verifConnexion($bdd, $user){
    $data = selectAllUserById($bdd, $user["id_user"]);
    $data = $data ->fetch();
    $_SESSION["id"] = $data["id_user"];
    $_SESSION["nom"] = $data["name_user"];
    $_SESSION["role"] = $data["id_role"];

}
?>