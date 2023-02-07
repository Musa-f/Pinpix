<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">

    <title>Document</title>
</head>
<body>
<?php include('header.php');?>


<div class="rectangle">Rectangle</div>


<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="Title-pages">CONTACT</h2>
                <div class="box rectangle">Rectangle</div>
                <div id="moncercle"></div>
                <div id="rectangle"></div>


        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-6">

    <form>
            <div class="form-group">
                <label for="exampleInputEmail1">EMAIL</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">MOT DE PASSE</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
            </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Vôtre message" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Commentaire</label>
        </div>
        <div class="form-group mt-4 mb-4 justify-content-center"></div>
            <button type="submit" class="btn ">ENVOYER</button>
        </div>
    </form>







<?php include('footer.php');?>
</body>
</html>