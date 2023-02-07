<?php
function verifConnexion($bdd, $user){
    $data = selectUser($bdd, $user["id_user"]);
    $_SESSION["id"] = $data["id_user"];
    $_SESSION["nom"] = $data["name_user"];
    $_SESSION["role"] = $data["id_role"];

}
?>