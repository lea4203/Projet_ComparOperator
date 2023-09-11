<?php
    include('header.php');
?>

<main>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-heading">Clean<span class="square"></span>Slick<div class="square"></div>
            Pixel Perfect</div>
            <p class="tagline">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis nisi arcu. Nam ac
                metus ipsum. Pellentesque rutrum libero urna, eu ornare odio luctus quis.</p>
            <p><a class="btn btn-default btn-lg mx-2" role="button">Learn more</a> <a class="btn btn-action btn-lg mx-2"
                    role="button">Download</a></p>

        </div>
        </div>
    </header>
    <!-- /Header -->

    <!-- Destinations Grid-->
    <section class="page-section bg-light" id="destination">
        <div class="container pt-0">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Destinations</h2>
                <h3 class="section-subheading text-muted">20 ans d'expérience à votre service.</h3>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-3">
                    <!-- Destination item 1-->
                    <div class="destination-item">
                        <a class="destination-link" data-bs-toggle="modal" href="#destinationModal1">
                            <div class="destination-hover">
                                <div class="destination-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="images/bureau-project-1.jpg" alt="..." />
                        </a>
                        <div class="destination-caption">
                            <div class="destination-caption-heading">Graphisme<br>/ Webdesign</div>
                            <div class="destination-caption-subheading text-muted">Identité visuelle<br>et ergonomie</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3">
                    <!-- destination item 2-->
                    <div class="destination-item">
                        <a class="destination-link" data-bs-toggle="modal" href="#destinationModal2"le>
                            <div class="destination-hover">
                                <div class="destination-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="images/carnet-project-2.jpg" alt="..." />
                        </a>
                        <div class="destination-caption">
                            <div class="destination-caption-heading">Intégration<br>/ Backoffice</div>
                            <div class="destination-caption-subheading text-muted">Responsivité et évolutivité</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3">
                    <!-- destination item 3-->
                    <div class="destination-item">
                        <a class="destination-link" data-bs-toggle="modal" href="#destinationModal3">
                            <div class="destination-hover">
                                <div class="destination-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="images/ordi-project-3.jpg" alt="..." />
                        </a>
                        <div class="destination-caption">
                            <div class="destination-caption-heading">Mise en page<br>/ Impression</div>
                            <div class="destination-caption-subheading text-muted">Suivi de<br>la chaîne graphique<br>sur tous supports</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3">
                    <!-- destination item 4-->
                <div class="destination-item">
                        <a class="destination-link" data-bs-toggle="modal" href="#destinationModal4">
                            <div class="destination-hover">
                                <div class="destination-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="images/ordi-project-3.jpg" alt="..." />
                        </a>
                        <div class="destination-caption">
                            <div class="destination-caption-heading">Photographie</div>
                            <div class="destination-caption-subheading text-muted">Shooting, prise de vues retouches</div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </section>

   
    <!-- Destinations-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Nos destinations !</h2>
                <h3 class="section-subheading text-muted">Sélectionnées pour vous par notre équipe, dépaysement garanti !</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="images/avatar.jpg" alt="..." />
                        <h4>Parveen Anand</h4>
                        <p class="text-muted">Lead Designer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i
                                class="fa-brands fa-facebook"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="images/avatar.jpg" alt="..." />
                        <h4>Diana Petersen</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="images/avatar.jpg" alt="..." />
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque,
                        laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- destination Modals-->
    <!-- destination item 1 modal popup-->
    <div class="destination-modal modal fade" id="destinationModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Projet bureau</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="images/bureau-project-1.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Agence g404
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Illustration
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- destination item 2 modal popup-->
    <div class="destination-modal modal fade" id="destinationModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Projet bureau</h2>
                                <p class="item-intro text-muted">Bureau sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="images/carnet-project-2.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Agence g404
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Graphic Design
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- destination item 3 modal popup-->
    <div class="destination-modal modal fade" id="destinationModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/destination/3.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Finish
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Identity
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- destination item 4 modal popup-->
    <div class="destination-modal modal fade" id="destinationModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/destination/4.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Lines
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Branding
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</main>
</html>