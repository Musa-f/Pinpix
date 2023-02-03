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
                
                <div class="gallery-images">
                    
                    <div class="box d-flex flex-column">
                        <div class="d-flex justify-content-between">
                            <p>@username <i class="bi bi-heart-fill"></i></p>
                            <p>189<i class="bi bi-hand-thumbs-up"></i></p>
                        </div>
                        <img src="https://fastly.picsum.photos/id/641/200/200.jpg?hmac=9pd71nRRRsT7TXf0zn0hQ6tW6VQnQ-UtL1JXDhJZB8E" alt="">
                    </div>

                    <!-- Divs à supprimer plus tard -->
                    <div class="box d-flex flex-column">
                        <div class="d-flex justify-content-between">
                            <p>@username <i class="bi bi-heart-fill"></i></p>
                            <p>189<i class="bi bi-hand-thumbs-up"></i></p>
                        </div>
                        <img src="https://fastly.picsum.photos/id/605/200/200.jpg?hmac=aAxC3x4fmu7RXhLH-1idijrAUvlZVEwlUqjzKR80YWo" alt="">
                    </div>
                    <div class="box d-flex flex-column">
                        <div class="d-flex justify-content-between">
                            <p>@username <i class="bi bi-heart-fill"></i></p>
                            <p>189<i class="bi bi-hand-thumbs-up"></i></p>
                        </div>
                        <img src="https://fastly.picsum.photos/id/790/200/200.jpg?hmac=Y1d81XFNx8LJhlNsiwDoDgIn4mF3SK9nTdIVqkkHS9I" alt="">
                    </div>
                    <div class="box d-flex flex-column">
                        <div class="d-flex justify-content-between">
                            <p>@username <i class="bi bi-heart-fill"></i></p>
                            <p>189<i class="bi bi-hand-thumbs-up"></i></p>
                        </div>
                        <img src="https://fastly.picsum.photos/id/334/200/200.jpg?hmac=Q9rDA3ngheQsAB7HoLSjpzYS0kqelfZIJBGDkW-4wgk" alt="">
                    </div>
                    <div class="box d-flex flex-column">
                        <div class="d-flex justify-content-between">
                            <p>@username <i class="bi bi-heart-fill"></i></p>
                            <p>189<i class="bi bi-hand-thumbs-up"></i></p>
                        </div>
                        <img src="https://fastly.picsum.photos/id/141/200/200.jpg?hmac=cy5VCF6f8Mq7cum6d-R7m7mbrGC0wgUzI4UpSX_qkIk" alt="">
                    </div>
                    <div class="box d-flex flex-column">
                        <div class="d-flex justify-content-between">
                            <p>@username <i class="bi bi-heart-fill"></i></p>
                            <p>189<i class="bi bi-hand-thumbs-up"></i></p>
                        </div>
                        <img src="https://fastly.picsum.photos/id/254/200/200.jpg?hmac=wM9u9N0tgdWKFIr8MxBLr8rLoV0JjUUKLk32XFV8agQ" alt="">
                    </div>
                    <div class="box d-flex flex-column">
                        <div class="d-flex justify-content-between">
                            <p>@username <i class="bi bi-heart-fill"></i></p>
                            <p>189<i class="bi bi-hand-thumbs-up"></i></p>
                        </div>
                        <img src="https://fastly.picsum.photos/id/738/200/200.jpg?hmac=s1pXxIw4TdDLyUY2RRVeDyhLPUF2xW3AFjdzjVsE6zc" alt="">
                    </div>
                    <!-- Fin des divs à supprimer -->

                </div>


                <!-- Button modal -->
                <button type="button" class="btn add-image" data-bs-toggle="modal" data-bs-target="#myModal">
                    <i class="bi bi-plus-square-fill"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Ajouter une image</h5>
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