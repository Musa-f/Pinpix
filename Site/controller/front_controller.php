<?php 
include "controller.php";

/*$displayImgAll = afficheUserGalerie($bdd, $id_user);
$displayImgAll -> fetchAll();
*/

$tab = afficheUserGalerie($bdd, $id_user);
$tab['nom_user'];

/*function displayImgAll($displayImgAll){ 
    foreach($displayImgAll as $displayImg){
    echo " 
        <div class='box d-flex flex-column'>
        <div class='d-flex justify-content-between'>

            <p id='user2'>".$displayImg['username']."
                <button onclick='addFollower(this)' class='unfollow'>
                    <i class='bi bi-heart-fill'></i>
                </button>
            </p>
            <p>".$displayImg['likes']."
                <button onclick='addLike(this)'>
                    <i class='bi bi-hand-thumbs-up'></i>
                </button>
            </p>

        </div>
        <img src='".$displayImg['url_image']."' alt='' data-bs-toggle='modal' data-bs-target='#picture' id='image'>
    </div>"; 
    }
}
*/