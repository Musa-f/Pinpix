<?php 
include "controller.php";

$displayImgAll = afficheUserGalerie();
$displayImgAll -> fetchAll();
function displayImgAll($displayImgAll){ 
    foreach($displayImgAll as $displayImg){
    echo " 
        <div class='box d-flex flex-column'>
        <div class='d-flex justify-content-between'>
            <p>".$displayImg['username']."<i class='bi bi-heart-fill'></i></p>
            <p>".$displayImg['likes']."<i class='bi bi-hand-thumbs-up'></i></p>
        </div>
        <img src='".$displayImg['url_image']."' alt='' data-bs-toggle='modal' data-bs-target='#picture'>
    </div>"; 
    }
}