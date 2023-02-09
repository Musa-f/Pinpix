<?php 
include "controller.php";

$displayImgAll = displayImgAll();
$displayImgAll -> fetchAll();
function displayImgAll($displayImgAll){ 
    foreach($displayImgAll as $displayImg){
    echo " 
        <div class='box d-flex flex-column'>
        <div class='d-flex justify-content-between'>
            <p>".$displayImg['username']."<button onclick='addFollower(this)'><i class='bi bi-heart-fill'></i></button></p>
            <p>".$displayImg['likes']."<button onclick='addLike()'><i class='bi bi-hand-thumbs-up'></i></button></p>
        </div>
        <img src='".$displayImg['url_image']."' alt='' data-bs-toggle='modal' data-bs-target='#picture' id='image'>
    </div>"; 
    }
}