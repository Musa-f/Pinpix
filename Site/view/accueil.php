<div class="container">
    <div class="row">
        <div class="col">
            <h2>"Des souvenirs éternels avec PinPix"</h2>
            <p>
                Rejoignez une communauté passionnée de photographie en ligne ! Avec ce site, vous pouvez partager vos plus belles photos avec le monde entier et découvrir les talents de photographes du monde entier. Suivez les galeries de vos photographes préférés, likez les photos qui vous inspirent. Créez votre propre galerie pour montrer votre créativité et votre style unique.
                Inscrivez-vous dès maintenant et faites partie d'une communauté en constante évolution de passionnés de la photographie.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="gallery-images">

                    <!-- -------------APPEL PHP------------- -->
                    <div class="box d-flex flex-column">
                        <div class="d-flex justify-content-end">
                            <p>189<i class="bi bi-hand-thumbs-up-fill"></i></p>
                        </div>
                        <div class="del-image" id="del-image-1">
                            <button class="btn-del-image">
                                <i class="bi bi-trash3-fill"></i>
                            </button>
                        </div>
                        <img src="https://fastly.picsum.photos/id/641/200/200.jpg?hmac=9pd71nRRRsT7TXf0zn0hQ6tW6VQnQ-UtL1JXDhJZB8E" alt="" data-bs-toggle="modal" data-bs-target="#picture">
                    </div>
                    <!-- -------------FIN------------- -->

            </div>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col">
            <div class="gallery-images">
                <?php 
                    
                    displayImgAll($bdd, $img);
                    $img = [];

                ?>
                    
            </div>
        </div>
       
    </div>
</div>

