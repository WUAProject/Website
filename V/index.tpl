<!DOCTYPE html>
<html>
    <head>
        <!-- CHARSET -->
        <meta charset="utf-8"/>
        <!-- VIEWPORT -->
        <meta content="width=device-width,initial-scale=1" name="viewport">
        <!-- TITLE -->
        <title>WUA</title>
        <meta property="og:site_name" content="WUA">
        <meta property="og:title" content="WUA"/>
        <meta property="twitter:title" content="WUA"/>
        <!-- TYPE -->
        <meta property="og:type" content="website">
        <meta property="twitter:type" content="website">
        <!-- LINK -->
        <meta property="og:url" content="https://WUA.com/">
        <meta property="twitter:url" content="https://WUA.com/">
        <!-- COLOR -->
        <meta name="theme-color" content="#FFAD2B"/>
        <!-- ICON -->
        <link rel="icon" href="V/img/logo.png"/>
        <!-- LANGAGE -->
        <meta name="language" content="fr-FR"/>
        <meta property="og:locale" content="fr-FR">
        <!-- DESCRIPTION -->
        <meta name="description" content="WUA est une application de gestion de soirée"/>
        <meta property="og:description" content="WUA est une application de gestion de soirée"/>
        <meta property="twitter:description" content="WUA est une application de gestion de soirée"/>   
        <!-- TWITTER -->
        <meta property="twitter:site" content="@WUA">    

        <!-- JQuery-->
        <script src="V/jquery/jquery.min.js" type="text/javascript"></script>
        <!-- JQuery-Mobile -->
        <script src="V/jquery/jquery-mobile.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <link href="V/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <!-- Font Awesome -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

        <!-- Mes styles -->
        <link href="V/css/style.css" rel="stylesheet" type="text/css">
        <link href="V/css/headerStyle.css" rel="stylesheet" type="text/css">
        <link href="V/css/devStyle.css" rel="stylesheet" type="text/css">
        <link href="V/css/footerStyle.css" rel="stylesheet" type="text/css">
        <link href="V/css/loginStyle.css" rel="stylesheet" type="text/css">
        
        <!-- Mes scripts -->
        <script src="V/js/dev.js" type="text/javascript"></script>
        <script src="V/js/sidenav.js" type="text/javascript"></script>
        <script src="V/js/smooth-scroll.js" type="text/javascript"></script>
        <script src="V/js/login.js" type="text/javascript"></script>
    </head>

    <body class="bc-white">
    	<?php
            require("V/header.html");
        ?>
        <div id="mainContent">
            <div id="scrollable">
                <div class="row">
                    <?php
                        require("V/presentation.html");
                        require("V/developpement.html");
                        require("V/monProfil.html");
                        require("V/aPropos.html");
                                               
                    ?>
                </div>
            </div>
        </div>
        <?php
            require("V/footer.html");
        ?>
        <div id="fixed-swipe">
            <div class="text-center" id="info-swipe">
                <p>Swipez pour changer de partie</p>
            </div>
            <img alt="A swipe logo" id="swipe-logo" src="V/img/swipe.png">
        </div>
    </body>
    
</html>