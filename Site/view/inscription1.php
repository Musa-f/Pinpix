<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <title>Inscription</title>
</head>
<body>
<?php 
$title= 'inscription';
if(!empty($_POST)){
  $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
}
extract($post);
$errors =[];

if (empty($name) || strlen($name) < 3){
  array_push($errors); //le nom est demander et il doit avoir minimum 3 caractères
}

if (empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL)){
  array_push($errors, 'L\'email n\est pas une adresse mail valide.');

?>
<?php include('header.php');?>


<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-6">
      <h2 class="titles-pages">INSCRIPTION</h2>

      <form>
        <div class="form-group1 mt-4 mb-4">
            <label for="exampleInputNom">NOM</label>
            <input type="text" class="form-control" id="Nom" aria-describedby="nom" placeholder="Nom">
          </div>
          <div class="form-group1 mt-4 mb-4">
            <label for="exampleInputEmail1">EMAIL</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
          </div>
          <div class="form-group1 mt-4 mb-4">
            <label for="exampleInputPassword1">MOT DE PASSE</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
          </div>
          <div class="form-group mt-4 mb-4 justify-content-center"></div>
          <button type="submit" class="btn btn-inscription text-white">CONFIRMER</button>
        </div>
        </form>
    </div>
  </div>
</div>

<?php include('footer.php');?>
</body>
</html>