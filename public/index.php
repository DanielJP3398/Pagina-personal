<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Mi Portafolio</title>
</head>

<body>

    <?php include '../includes/info_principal.php'; ?>

    <div class="aboutMe-container" id="aboutme">
        <div class="about-information">
            <h3>
                <b style="color:yellow;">< </b> About Me<b style="color:yellow;"> /></b>
            </h3>
            <hr>
            </br>
            <p id="about-paragraph">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate sed aliquid a unde illo dignissimos
                quas dolore labore sunt, delectus similique aut quibusdam doloremque commodi perspiciatis fugit
                perferendis cum ab.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita nobis vero exercitationem, numquam
                in consequuntur eum quis fuga? Explicabo obcaecati consequatur ipsum. Aspernatur vel id amet nisi ut
                fugit cumque.
            </p>
            <li>jajajksmskmk</li>
            <li>ajhahww</li>
            <a href="#container-cards" class="icono-mano"><i class="fas fa-hand-point-down"></i></a>
        </div>
        <div class="about-information-left">
            <a href="#"><i class="fab fa-html5" style="color:orangered;"></i></a>
            <a href="#"><i class="fab fa-css3-alt" style="color:cornflowerblue;"></i></a>
            <a href="#"><i class="fab fa-js" style="color:yellow;"></i></a>
            <a href="#"><i class="fab fa-php" style="color:plum;"></i></a>
            <a href="#"><i class="fab fa-cuttlefish">#</i></a>
            <a href="#"><i class="fas fa-database"></i></a>
            <a href="#"><i class="fab fa-angular" style="color:red;"></i></a>
        </div>
    </div>

    <?php include '../includes/cards.php'; ?>

    <div class="footer">
        <div class="container-footer">
            <img src="assets/img/losgin2.jpg" alt="" id="img-footer">
            <div class="footer-content">
                <h3 class="footer-title"><strong>Contáctame ↓</strong></h3>
                <br>
                <br>
                <br>
                <p class="footer-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod velit at
                    metus interdum, vel blandit lectus lacinia.</p>
                <br>
                <br>
                <ul class="social-links">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-github"></i></a></li>
                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>
            <br>
            <br>
            <p class="footer-text">© 2023 Mi Portafolio. Todos los derechos reservados Jose Daniel Palacio Arango.</p>
        </div>
    </div>

    <script src="assets/js/script.js"></script>

</body>

</html>