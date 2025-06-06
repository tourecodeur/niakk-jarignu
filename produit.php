<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Niakk Jarignu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>15001, Dakar, sénégal</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>niakkjarignu@gmail.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Suivez-nous :</small>
                <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">NIAKK <span class="text-secondary">JARIGNU</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link">Acceuil</a>
                    <a href="A propos.php" class="nav-item nav-link">A propos</a>
                    <a href="produit.php" class="nav-item nav-link active">Produits</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <!-- <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-search text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-user text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-shopping-bag text-body"></small>
                    </a> -->
                    <a href="contact.php" class="btn btn-secondary rounded-pill py-sm-2 px-sm-5 ms-3">Contactez-nous</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Produits</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Acceuil</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Produits</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Product Start -->
    <div class="container-xxl py-3">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Nos Produits</h1>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">Végétale</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Fruits </a>
                        </li>
                        <li class="nav-item me-0">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">Fraîche</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Tomates fraîches</a>
                                    <span class="text-primary me-1">250F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_tomate.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_tomate.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-2.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Ananas</a>
                                    <span class="text-primary me-1">350F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_ananas.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_ananas.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-3.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Piment</a>
                                    <span class="text-primary me-1">200F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_piment.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_piment.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-4.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Fraise</a>
                                    <span class="text-primary me-1">350F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_fraize.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_fraize.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-5.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Concombre</a>
                                    <span class="text-primary me-1">300F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_concombre.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_concombre.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-6.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="details_tomatemur.php">Tomate Mûr</a>
                                    <span class="text-primary me-1">275F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_tomatemur.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-7.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Pomme de Terre</a>
                                    <span class="text-primary me-1">300F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_pommeterre.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_pommeterre.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-8.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Banane</a>
                                    <span class="text-primary me-1">350F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_banane.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_banane.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Tomates fraîches</a>
                                    <span class="text-primary me-1">250F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_tomate.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_tomate.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-2.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Ananas</a>
                                    <span class="text-primary me-1">350F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_ananas.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_ananas.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-3.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Piment</a>
                                    <span class="text-primary me-1">200F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_piment.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_piment.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-4.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Fraise</a>
                                    <span class="text-primary me-1">350F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_fraize.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_fraize.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-5.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Concombre</a>
                                    <span class="text-primary me-1">300F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_concombre.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_concombre.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-6.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="details_tomatemur.php">Tomate Mûr</a>
                                    <span class="text-primary me-1">275F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_tomatemur.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-7.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Pomme de Terre</a>
                                    <span class="text-primary me-1">300F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_pommeterre.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_pommeterre.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-8.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Banane</a>
                                    <span class="text-primary me-1">350F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_banane.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_banane.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Tomates fraîches</a>
                                    <span class="text-primary me-1">250F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_tomate.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_tomate.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-2.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Ananas</a>
                                    <span class="text-primary me-1">350F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_ananas.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_ananas.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-3.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Piment</a>
                                    <span class="text-primary me-1">200F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_piment.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_piment.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-4.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Fraise</a>
                                    <span class="text-primary me-1">350F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_fraize.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_fraize.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-5.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Concombre</a>
                                    <span class="text-primary me-1">300F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_concombre.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_concombre.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-6.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="details_tomatemur.php">Tomate Mûr</a>
                                    <span class="text-primary me-1">275F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_tomatemur.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-7.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Pomme de Terre</a>
                                    <span class="text-primary me-1">300F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_pommeterre.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_pommeterre.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="img/product-8.jpg" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Nouveau</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Banane</a>
                                    <span class="text-primary me-1">350F</span>
                                    <span class="text-body"> / Kilogramme (kg)</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="details_banane.php"><i class="fa fa-eye text-primary me-2"></i>Voir Détails</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="details_banane.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Acheter</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->


    <!-- Firm Visit Start -->
    <div class="container-fluid bg-primary bg-icon mt-5 py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-5 text-white mb-3">Rencontrez notre équipe</h1>
                    <p class="text-white mb-0">Chez BioTerre Agro, notre force réside dans une équipe passionnée, engagée et complémentaire.</p>
                </div>
                <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="contact.php">Prendre un rendez-vous</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Firm Visit End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light bg-icon py-6 mb-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Avis client</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Depuis que j’ai découvert BioTerre Agro, je ne consomme plus que leurs légumes et jus naturels.
                         On sent vraiment la différence au goût et en fraîcheur !</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/profile-1.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Dr. Mamadou Seck</h5>
                            <span>cliente fidèle</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">En tant que nutritionniste, je recommande les produits BioTerre à mes patients. C’est sain, local et fiable.</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/profile-2.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Aïssatou Diop</h5>
                            <span>nutritionniste</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Excellent service, produits frais livrés à temps. Une belle initiative pour promouvoir l’agriculture bio au Sénégal.</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/profile-3.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Arame Niang</h5>
                            <span> restauratrice</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="fw-bold text-primary mb-4">NIAKK<span class="text-secondary"> JARIGNU</span></h3>
                    <p style="text-align:justify">Niakk Jarignu s’appuie sur une équipe complémentaire, unissant diverses compétences
                         pour offrir des produits sains et durables.</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Infos contact</h4>
                    <p><i class="fa fa-map-marker-alt me-3"></i>15001, Dakar - sénégal</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+221 78 678 90 20</p>
                    <p><i class="fa fa-envelope me-3"></i>niakkjarignu@gmail.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Menu</h4>
                    <a class="btn btn-link" href="">A propos</a>
                    <a class="btn btn-link" href="contact.php">Contact</a>
                    <a class="btn btn-link" href="produit.php">Produits</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Inscrivez-vous à notre newsletter, ne manquez rien de l’univers du bio !</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Votre email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">S'inscrire</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Niakk Jarignu</a>, Tous droits réservés.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Conçu par <a href="https://htmlcodex.com"> Seynabou Touré</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>