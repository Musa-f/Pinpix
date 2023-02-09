let connectedUser = document.getElementById('compte').textContent;
console.log(connectedUser);


function test(){
    $ajax
    url: "traitement.php"
    data: {
        connectedUser:username,
        username:username
    }
}