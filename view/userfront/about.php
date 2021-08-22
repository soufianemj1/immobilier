
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>qui sommes-nous ?</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="http://localhost/mvcimmobilier/view//userfront/about.css">
    <link rel="stylesheet" href="http://localhost/mvcimmobilier/view/userfront/footer.css">


</head>
<body>
<nav class="navbar">
        <div id="logo"><img src="http://localhost/mvcimmobilier/view/userfront/userimage/logo.png" alt=""></div>
        <div id="sousnav">
            <a href="http://localhost/mvcimmobilier/">Acceuil</a>
            <a href="http://localhost/mvcimmobilier/offre">Offres</a>
            <a href="http://localhost/mvcimmobilier/view/about">À-propos</a>
            <a href="http://localhost/mvcimmobilier/contact">Contactez-nous</a>
            <a href="http://localhost/mvcimmobilier/rdv">Rendez-vous</a>
            
        </div>
    </nav>
    


    <section class="first">


     <div class="animate__animated animate__fadeInDown"><h1>QUI SOMMES-NOUS?</h1></div>
        
    </section>

    <section class="middlesection">

        <div class="textdiv">
            <p>
                Jaafar immobilier est une agence immobilière orientée vers l'écoute, la satisfaction de nos clients acquéreurs et vendeurs est fondamentale. Grâce à notre sérieux et notre rigueur, nous avons établie une vraie relation de confiance avec nos clients. <br>
                Fort de nos 10 années d'expérience, nous sommes à votre écoute pour étudier votre projet et répondre précisément à vos attentes, afin de vous guider dans la vente de votre bien ou dans vos recherches d'appartement, de maison ou de terrain. <br>
                Si vous chererchez la diversité de choix avec les meilleurs prix du marché, c'est nous la destination.
            </p>
        </div>

        <div class="imagediv">
            <img src="http://localhost/mvcimmobilier/view/userfront/userimage/middleabout.jpg" alt="">
        </div>

    </section>
    


    <section class="middlesection">
        <div class="imagediv">
            <img src="http://localhost/mvcimmobilier/view/userfront/userimage/about.jpg" alt="">
        </div>

        <div class="textdiv">
            <p>
                Jaafar immobilier est une agence immobilière orientée vers l'écoute, la satisfaction de nos clients acquéreurs et vendeurs est fondamentale. Grâce à notre sérieux et notre rigueur, nous avons établie une vraie relation de confiance avec nos clients. <br>
                Fort de nos 10 années d'expérience, nous sommes à votre écoute pour étudier votre projet et répondre précisément à vos attentes, afin de vous guider dans la vente de votre bien ou dans vos recherches d'appartement, de maison ou de terrain. <br>
                Si vous chererchez la diversité de choix avec les meilleurs prix du marché, c'est nous la destination.
            </p>
        </div>

        

    </section>
    

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Jaafar immo</h4>
                    <ul>
                        <li><a href="#">Acceuil</a></li>
                        <li><a href="#">Offres</a></li>
                        <li><a href="#">À-propos</a></li>
                        <li><a href="#">Contactez-nous</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Nos cordonées</h4>
                    <ul>
                        <li>
                            <div><img class="footicones" src="userimage/smartphone.svg" alt=""></div> 0665566656
                        </li>
                        <li>
                            <div><img class="footicones" src="userimage/map-pin.svg" alt=""></div> Avenue Hassan II ang.
                            av Rachidi, CASABLANCA
                        </li>
                        <li>
                            <div><img class="footicones" src="userimage/mail.svg" alt=""></div> Jaafar.immo@gmail.com
                        </li>


                    </ul>
                </div>

                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <ul>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Linkedin</a></li>
                        </ul>

                    </div>
                </div>
                <div id="copyright" class="footer-col">
                    <img id="logoimage" src="userimage/logo.png" alt="">
                    <div class="copyright">
                        © Tous droits réservés pour Jaafar immobilier<br> 2020
                      </div>

                </div>
               
            </div>
    </footer>


    <script>
        let btn = document.querySelector('.bars');
        let nav = document.getElementById('sousnav');
        btn.addEventListener('click',() =>{
            if(nav.style.display === 'none'){
                nav.style.display = 'flex';
            }else {
                nav.style.display === 'none';
            }
        }
        )

    
        
    
   </script>
</body>
</html>