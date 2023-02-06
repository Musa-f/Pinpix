<?php include 'header-connexion.php' ?>

    <div class="container mt-5 mb-5">
        <form action="" method="post">

            <!-- Modification compte -->
            <div class="row justify-content-center text-center mb-4">
                <h2 class="titles-pages">MON COMPTE</h2>
                <div class="col-4">
                <hr>
                </div>
                
            </div>
            <div class="row justify-content-center align-items-center mt-5">
                <!-- Avatar -->
                <div class="col-3 d-flex flex-column align-items-center">
                    <div class="change-image-account m-2">
                        <img src="https://fastly.picsum.photos/id/639/200/250.jpg?hmac=35Ur78QpWdVJXYe4w0oX4sulN40mNmoxdNUJABatFwc" alt="">
                    </div>
                    <input type="file" class="form-control form-control-sm mt-3 input-upload-img" name="upload_image">
                </div>
                <!-- Infos  -->
                <div class="col-5 d-flex flex-column">
                    <div class="form-group">
                        <label for="exampleInputPassword1">
                            <i class="bi bi-pencil-square"></i>
                            Nom d'utilisateur
                        </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" value="default">
                    </div>
                    <div class="form-group mt-3">
                        <label for="exampleInputPassword1">
                            <i class="bi bi-pencil-square"></i>
                            Email
                        </label>
                        <input type="email" class="form-control" id="exampleInputPassword1" value="default">
                    </div>
                    <div class="form-group mt-3">
                        <label for="exampleInputPassword1">
                            <i class="bi bi-pencil-square"></i>
                            Mot de passe
                        </label>
                        <input type="password" class="form-control" id="exampleInputPassword1" value="default">
                    </div>
                    <div class="form-group mt-3 align-self-end">
                        <button type="submit" class="btn btn-account btn-account-validate">Valider</button>
                        <br>
                        <button type="submit" class="btn btn-account btn-account-cancel">Annuler</button>
                    </div>
                </div>
            </div>
            <!-- Suppressions, validation, annulation -->
            <div class="row text-end mt-5">
                <div class="col-10 mt-5">
                    <button type="submit" class="btn btn-secondary">Supprimer mon compte</button>
                </div>
            </div>

        </form>
    </div>

<?php include 'footer.php' ?>