<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="http://localhost/mvcimmobilier/view/userfront/contact.css">
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

    <section class="empty">

        <H1 class="animate__animated animate__fadeInDown">ON VOUS ENTEND</H1>
            
    </section>

    <section class="totalcontactempty">
        
            <div class="contacthead"><img class="animate__animated animate__fadeInLeft" src="http://localhost/mvcimmobilier/view/userfront/userimage/messagesvg.png" alt=""></div>
            

      
        <form action="http://localhost/mvcimmobilier/contact/save" method="post">

            <div class="totalcontact">
                <div class="contact">

                    <div class="infos">
                        <div>
                            <p>Nom et prénom:</p>
                        </div>
                        <div><input type="text" name="nom"></div>

                        <div>
                            <p>Numero téléphone:</p>
                        </div>
                        <div><input type="text" name="telephone"></div>

                        <div>
                            <p>Email:</p>
                        </div>
                        <div><input type="email" name="mail"></div>
                    </div>

                    <div class="message">
                        <p>Message:</p>
                        <textarea name="message" id="" cols="30" rows="10"></textarea>

                    </div>
                </div>
                <input id="contactbutton" type="submit" value="Envoyer" name="submit">
            </div>




        </form>
    

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
                            <div><img class="footicones" src="http://localhost/mvcimmobilier/view/userfront/userimage/smartphone.svg" alt=""></div> 0665566656
                        </li>
                        <li>
                            <div><img class="footicones" src="http://localhost/mvcimmobilier/view/userfront/userimage/map-pin.svg" alt=""></div> Avenue Hassan II ang.
                            av Rachidi, CASABLANCA
                        </li>
                        <li>
                            <div><img class="footicones" src="http://localhost/mvcimmobilier/view/userfront/userimage/mail.svg" alt=""></div> Jaafar.immo@gmail.com
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
                    <img id="logoimage" src="http://localhost/mvcimmobilier/view/userfront/userimage/logo.png" alt="">
                    <div class="copyright">
                        © Tous droits réservés pour Jaafar immobilier<br> 2020
                    </div>

                </div>

            </div>
    </footer>

    
</body>