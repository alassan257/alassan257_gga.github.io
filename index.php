<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assurance Santé - Accueil</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 15px;
            background: rgba(0, 77, 0, 0.8);
            color: white;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }
        .header {
            text-align: center;
            padding: 50px 0;
            background: rgba(0, 127, 0, 0.9);
            color: white;
        }
        .slider {
            position: relative;
            max-width: 100%;
            margin: auto;
            overflow: hidden;
        }
        .slides {
            display: none;
            width: 100%;
        }
        .content {
            padding: 20px;
            max-width: 800px;
            margin: auto;
        }
        .footer {
            text-align: center;
            padding: 15px;
            background: rgba(0, 77, 0, 0.8);
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .active {
            display: block;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="title">Assurance Santé</div>
        <div>
            <a href="#">Accueil</a>
            <a href="#">Services</a>
            <a href="#">Nous contacter</a>
        </div>
    </div>

    <div class="header">
        <h1>Bienvenue chez Assurance Santé</h1>
        <p>Votre bien-être, notre priorité.</p>
    </div>

    <div class="slider">
        <img class="slides active" src="img/image1.jpg" alt="Image 1">
        <img class="slides" src="img/image2.jpg" alt="Image 2">
        <img class="slides" src="img/image3.jpg" alt="Image 3">
        <img class="slides" src="img/image4.jpg" alt="Image 4">
        <img class="slides" src="img/image5.jpg" alt="Image 5">
    </div>

    <div class="content">
        <h2>Nos Services</h2>
        <p>Nous offrons des plans d'assurance adaptés à vos besoins :</p>
        <ul>
            <li>Assurance hospitalisation</li>
            <li>Assurance maternité</li>
            <li>Assistance médicale à l'étranger</li>
            <li>Prévention et conseils santé</li>
            <li>Remises sur les soins dentaires</li>
        </ul>
        <h2>Pourquoi choisir notre assurance ?</h2>
        <p>Avec des options flexibles, un service client exceptionnel et une couverture complète, nous sommes là pour vous.</p>
    </div>

    <div class="footer">
        <p>&copy; 2024 Assurance Santé. Tous droits réservés.</p>
        <p><a href="#">Politique de confidentialité</a> | <a href="#">Conditions d'utilisation</a></p>
    </div>

        <!-- connexion avec Google  -->
        <div id="g_id_onload"
            data-client_id="756990657985-tpbfnrknsk9qnd2tm223jbq900j0klo1.apps.googleusercontent.com"
            data-context="signin"
            data-ux_mode="popup"
            data-login_uri="http://localhost"
            data-auto_prompt="false">
        </div>

        <div class="g_id_signin"
            data-type="standard"
            data-shape="rectangular"
            data-theme="filled_blue"
            data-text="signin_with"
            data-size="large"
            data-logo_alignment="left">
        </div>

        <!-- connexion avec Google -->
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            const slides = document.getElementsByClassName("slides");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            slides[slideIndex - 1].style.display = "block";  
            setTimeout(showSlides, 3000); // Change image every 3 seconds
        }
    </script>
</body>
</html>
