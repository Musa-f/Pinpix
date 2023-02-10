<?php 
//include "controller.php";

/*$displayImgAll = afficheUserGalerie($bdd, $id_user);
$displayImgAll -> fetchAll();
*/
$id_user = getIdUser();

function displayImgAll(){ 
    $tabs = afficheUserGalerie($bdd, $id_user);
    foreach($tabs as $tab){
    echo " 
        <div class='box d-flex flex-column'>
        <div class='d-flex justify-content-between'>

            <p id='user2'>".$tab[0]."
                <button onclick='addFollower(this)' class='unfollow'>
                    <i class='bi bi-heart-fill'></i>
                </button>
            </p>
            <p>".$tab[3]."
                <button onclick='addLike(this)'>
                    <i class='bi bi-hand-thumbs-up'></i>
                </button>
            </p>

        </div>
        <img src='".$tab[1]."' alt='' data-bs-toggle='modal' data-bs-target='#picture' id='image'>
    </div>"; 
    }
}
