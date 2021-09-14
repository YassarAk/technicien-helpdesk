<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>helpdesk_pc</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    .error {
        color: #FF0000;
    }
    </style>
</head>

<body>

    <header class="header">





        <div class="header__logo">Electronics</div>


        <nav>
            <ul class="list-menu">
                <li class="menu">
                    <a href="index.php">Nos Services</a>
                    <!-- <span>&#9660;</span> -->
                    <ul class="list-sous-menu">
                        <!-- <li class="sous-menu"> <a href="Electro.php">Electronique  <br> des composants </a> </li>

                        <li class="sous-menu"> <a href="Repair.php">reparation des  <br> ordinateurs</a> </li>
                        <li class="sous-menu"> <a href="Help.php">Assistant et solution <br> informatique </a> </li> -->
                    </ul>
                </li>
                <li class="menu"> <a href="magasin.php">Magasins</a> </li>
                <li class="menu"> <a href="Assistance.php">Reparation</a> </li>
            </ul>
        </nav>
        <div class="search-account">

            <!-- <a href="inscription.php" title="creer compte"><img src="img/account.png" alt="" width="35px" -->
            <!-- height="35px"></a> -->
        </div>
    </header>




    <!-- CONTENU DU SITE A PARTIR DE BANNIERE -->
    <div class="site-content">
        <h1 style="text-align:center;">HORAIRES</h1>
        <div style="display:flex;">
            <div>
                <div class="hor">
                    <h2>MARDI 9h20 - 12h20 14h20 - 19h</h2>

                    <h2>MERCREDI 9h20 - 12h20 14h20 - 19h</h2>

                    <h2>JEUDI 14h20 - 19h</h2>

                    <h2>VENDREDI 9h20 - 12h20 14h20 - 19h</h2>

                    <h2>SAMEDI 9h20 - 12h20 14h20 - 19h</h2>
                </div>
                <div>
                    <div class="tel">TEL: 96.11.52.95</div>

                    <div class="lien"><a href="http://www.facebook.com">Facebook</a></div>

                    <div class="mail">
                        <p1> <strong>Mail:</strong> <a
                                href="mailto:yachaskillb@gmail.com"><strong>yachaskillb@gmail.com</strong></a></p1>
                    </div>
                </div>

            </div>
            <!--FORMULAIRE  -->
            <div style="padding:0 100px">

                <form method="post" action="traitement.php">
                    <?php
                    $emailErr  = $phoneErr =  "";
                      $email  =   $phone  =  $commantaire  =  "";
                 ?>



                    <div class="c100">
                        <label for="email">Votre Email : </label>
                        <input type="email" name="email" id="email" required="requiered"
                            placeholder="monsite@gmail.com.." value="<?php echo $email;?>">
                        <span class="error">* <?php echo $emailErr;?></span>

                    </div>

                    <div class="c100">

                        <label for="tel">Telephone : </label>
                        <input type="number" name="phone" id="tel" required="requiered" placeholder="77-44-55-88"
                            value="<?php echo $phone;?>">
                        <span class="error">* <?php echo $phoneErr;?></span>

                    </div>

                    <div class="c100">
                        <label for="">Message : </label>
                        <textarea name="commantaire" id="" rows="5" cols="30"><?php echo $commantaire;?></textarea>
                    </div>
                    <div class="c100">

                        <input class="submit" type="submit" name="submit" value="Envoyer">
                    </div>

                </form>

            </div>
        </div>


    </div>
    <!-- INTERFACE DE CONNECTION -->
    <div class=" connexion-position">
        <div class="connected">
            <a href="formulaire.php">
                <button class="boutonDeConnexion">Contact/Info</button>
            </a>

        </div>

    </div>

    <div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.326523703424!2d1.1366015141491326!3d6.220603328337667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102159f69fa61763%3A0xdd1cf957f0672247!2zRVBQIEtvaMOp!5e0!3m2!1sfr!2stg!4v1621000651856!5m2!1sfr!2stg"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>



    <footer>
        <div class="contenu-footer">

            <div class="bloc footer-services">
                <h2>Nos Services</h2>
                <ul class="liste_services">
                    <li>
                        <a href="#">reparation des ordinateurs</a>
                    </li>
                    <li>
                        <a href="#">Electronique des composants</a>
                    </li>

                    <li>
                        <a href="#">assistant et solution informatique</a>
                    </li>

                </ul>
            </div>

            <div class="bloc name">
                <h1>TECHNICIEN HELPDESK</h1>
                <P>Agence de reparation des ordinateurs ,<br> assistant et solution informatique</P>

            </div>
            <div class="bloc footer-contact">
                <h2>Contatez</h2>
                <p>info@technicienhelpdesk.com</p>
                <p>obtenir un devis</p>
                <div class="social">
                    <ul class="social-icons ">
                        <li>
                            <a href="http://www.facebook.com "> <img src="img/icons8-facebook.svg " alt=" ">
                                facebook</a>
                        </li>
                        <li>
                            <a href="http://www.instagram.com"> <img src="img/icons8-instagram.svg "
                                    alt=" ">instagram</a>
                        </li>
                    </ul>
                </div>
            </div>








        </div>
        <div class="webmaster ">
            <p>Copyright © 2021 make with love <img src="img/heart.png " width="18px" height="15px"> by @lecode </p>
        </div>


    </footer>
    <script src="js/app.js "></script>

</body>

</html>