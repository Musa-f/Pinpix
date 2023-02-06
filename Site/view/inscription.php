
/*
<?php
// création d'une variable
$title = 'Inscription';

if(!empty($_POST)){
  // On lui a mit un filtre de nettoyage
  $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  extract($post);

  $errors = [];
  //si le nom est vide ou que la chaine du nom n'a pas assez de caractère
  if(empty($name) || strlen($name) < 6){
    array_push($errors, 'Le nom doit contenir au moins 6 caractères.');
  }
  if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
    array_push($errors, 'L\'email n\'est pas une adresse valide.');
  }
  if(empty($password) || strlen($passeword) < 8){
    array_push($errors, 'Le mot de passe doit contenir au moins 8 caractères.');
  }
}
?>*/

<?php include ('header.php');

<div class="container">
  <div class="row">
    <div class="col-8">
      <h2>INSCRIPTION</h2>
/*
      <?php if(!empty($errors)):?>
      <div class="alerte-danger">
        <?php foreach($errors as $error):?>
          <p><?=$error;?</p>
          <?php endforeich;?>
        </div>
      <?php endif;?>*/

        <form>
        <div class="form-group">
            <label for="exampleInputNom">NOM</label>
            <input type="text" class="form-control" id="Nom" aria-describedby="nom" placeholder="Nom">
            <small id="Nom" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">EMAIL</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
            <small id="emailHelp" class="form-text text-muted">Nous ne partageons pas votre email</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">MOT DE PASSE</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Vérification</label>
          </div>
          <button type="submit" class="btn btn-primary">CONFIRMER</button>
        </form>
    </div>
  </div>
</div>




<?php include ('footer.php');?>



