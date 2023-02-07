<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.scss">
    <title>Document</title>
</head>
<body>
<?php include('header.php');?>


<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-6">
      <h2 class="inscription fw-bold">INSCRIPTION</h2>

      <form>
        <div class="form-group mt-4 mb-4">
            <label for="exampleInputNom">NOM</label>
            <input type="text" class="form-control" id="Nom" aria-describedby="nom" placeholder="Nom">
          </div>
          <div class="form-group mt-4 mb-4">
            <label for="exampleInputEmail1">EMAIL</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
          </div>
          <div class="form-group mt-4 mb-4">
            <label for="exampleInputPassword1">MOT DE PASSE</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
          </div>
          <div class="form-group mt-4 mb-4 justify-content-center"></div>
          <button type="submit" class="btn btn-inscription">CONFIRMER</button>
        </div>
        </form>
    </div>
  </div>
</div>

<?php include('footer.php');?>
</body>
</html>