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
    <link href="css/form.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <div class="form">
      <div class="contact-info-form">
        <span class="circle one"></span> <span class="circle two"></span>
        <form
          action="traitement_commande.php"

          method="post"
          autocomplete="off"
        >
          <!-- <h3 class="title">Contact us</h3> -->

          <div class="social-input-containers">
            <input
              type="text"
              name="commande"
              class="input text-center text-light text-uppercase fw-bold bg-primary"
              value="Informations"
              readonly
            />
          </div>
          <div class="social-input-containers">
            <input
              type="text"
              name="nom"
              class="input fw-bold"
              placeholder="Saisir votre Nom..."
            />
          </div>
          <div class="social-input-containers">
            <input
              type="text"
              name="prenom"
              class="input fw-bold"
              placeholder="Saisir votre Prénom..."
            />
          </div>
          <div class="social-input-containers">
            <input
              type="tel"
              name="telephone"
              class="input fw-bold"
              placeholder="Saisir votre numéro téléphone..."
            />
          </div>
          <div class="social-input-containers">
            <input
              type="text"
              name="adresse"
              class="input text-secondary fw-bold"
              placeholder="Saisir votre adresse..."
            />
          </div>
          <div class="col-12 col-sm-12 mt-2">
            <select class="form-select bg-secondary text-light border-2 border-light fw-bold" id="aliment" name="aliment" style="height: 48px;">
              <option selected>Choisir un aliment</option>
              <option value="Banane">Banane</option>
              <option value="Fraise">Fraise</option>
              <option value="Piment">Piment</option>
              <option value="Tomate">Tomate</option>
              <option value="Ananas">Ananas</option>
              <option value="Pomme de Terre">Pomme de Terre</option>                            
              <option value="Concombre">Concombre</option>
              <option value="Tomate Mûr">Tomate Mûr</option>
            </select>
          </div>
          <div class="social-input-containers">
            <input
              type="number"
              name="quantite"
              class="input text-light"
              placeholder="Quantité en Kilogramme..."
            />
          </div>
          <input type="submit" value="ENVOYER" class="btn text-secondary border-secondary bg-light fw-bold w-100" />
        </form>
      </div>
      <div class="contact-info">
        <h3 class="title text-primary fw-bod">Formulaire De Commande</h3>
        <p class="text">Veuillez remplir les champs à gauche pour faire valider votre commande !</p>
        <div class="info">
          <div class="social-information">
            <i class="fas fa-map-marker text-secondary"></i>
            <p class="fw-bold">15001, Dakar - sénégal</p>
          </div>
          <div class="social-information">
            <i class="fas fa-envelope-open text-secondary"></i>
            <p class="fw-bold">niakkjarignu@gmail.com</p>
          </div>
          <div class="social-information">
            <i class="fas fa-mobile text-secondary"></i>
            <p class="fw-bold">+221 78 678 90 20</p>
          </div>
        </div>
        <div class="social-media">
          <p class="fw-bold texte-primary">Suivez-nous sur :</p>
          <div class="social-icons">
            <a href="#"> <i class="fab fa-facebook-f text-light"></i> </a>
            <a href="#"> <i class="fab fa-twitter text-light"></i> </a>
            <a href="#"> <i class="fab fa-instagram text-light"></i> </a>
            <a href="#"> <i class="fab fa-linkedin text-light"></i> </a>
          </div>
        </div>
      </div>
    </div>
  </div>
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