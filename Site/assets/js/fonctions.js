let connectedUser = document.getElementById('compte').textContent;

function addFollower(this){
    let followUser;
    //console.log(this.parentNode.textContent);

    $.ajax({
        url: 'localhost/pinpix/site/controller/fonctions.php',
        type: 'POST',
        data: {
            user1 : connectedUser,
            user2 : followUser
        }
    });
}

function addLike(this){
    let imgLike = document.getElementById('image');
    imgLike = this.imgLike;

    $.ajax({
        url: 'localhost/pinpix/site/controller/fonctions.php',
        type: 'POST',
        data: {
            userLike : connectedUser,
            imgLike : imgLike
        }
    });
}
