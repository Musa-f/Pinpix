<?php include "header-connexion.php" ?>

<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-2 text-center">
            <img src="/pinpix/site/assets/ressources/img/no-avatar.png" alt="" class="avatar">
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-4">
                    <h2>Username</h2>
                </div>
                <div class="col-1 d-flex justify-content-center align-items-center">
                    <h2><i class="bi bi-heart align-self-center"></i></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-5 fw-bold">14 Follows</div>
            </div>
            <div class="row">
                <div class="col-5 fw-bold">56 Followers</div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quaerat facilis veniam architecto, vitae esse delectus odit eveniet necessitatibus eum quam excepturi quas tenetur debitis ab enim quae quod nisi?
                </div>
            </div>
        </div>
    </div>

    <br><br>

    <div class="row mt-5">
        <div class="col-12">
            <div class="element mb-5">
                <h2 class="gallery-title">Galerie</h2>
                <div class="top"></div>
                <div class="left"></div>
                <div class="bottom"></div>
                <div class="right"></div>
                
                <!-- <div class="d-flex justify-content-around"> -->
                <div class="gallery-images">
                    <div>
                        <div class="header">
                            <div class="info-user">
                                <div class="username"></div>
                                <div class="follow"></div>
                            </div>
                            <div class="info-picture">
                                <div class="nb-likes"></div>
                                <div class="like"></div>
                            </div>
                        </div>
                        <div class="picture"></div>
                    </div>
                    <div>test</div>
                    <div>test</div>
                    <div>test</div>
                    <div>test</div>
                    <div>test</div>
                    <div>test</div>
                    <div>test</div>
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn add-image" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="bi bi-plus-square-fill"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>

        </div>
    </div>

</div>

<?php include "footer.php" ?>