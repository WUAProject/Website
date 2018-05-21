<?php
	
    require("statistiques.php");
    echo "
        <div class='col-xs-3' id='monProfil'>
            <div class='container esp section partie'>
                <div class='row'>
                    <div class='col-xs-12 col-sm-offset-2 col-sm-8'>
                        <h1 class='text-center part-title'>Mon profil</h1>
                    </div>";
	if (!isset($_SESSION['profil'])) {
		echo "
    
            </div>
            <div class='row'>
                <div class='col-xs-0 col-sm-6' id='div-stats'>
                    <h2 class='part-title' id='stats'>Quelques statistiques</h2>
                    <div class='esp row'>
                        <div class='col-xs-12 col-md-6 esp text-center'>
                            <i class='fas fa-user fa-7x'></i>";
            displayNbUtil();
            echo "
                        </div>
                        <div class='col-xs-12 col-md-6 esp text-center'>
                            <i class='fas fa-chart-line fa-7x'></i>";
            displayNbUtilLastMonth();
            echo "
                        </div>
                        <div class='col-xs-12 col-md-6 esp text-center'>
                            <i class='far fa-moon fa-7x'></i>";
            displayNbSoiree();
            echo"
                        </div>
                        <div class='col-xs-12 col-md-6 esp text-center'>
                            <i class='fas fa-users fa-7x'></i>";
            displayNbParticipant();
            echo "
                        </div>";
            echo "
                        <div class='col-xs-12 col-md-6 esp text-center'>
                            <i class='far fa-building fa-7x'></i>";
            displayNbDifferentLocation();
            echo "
                        </div>
                    </div>
                </div>
                <div class='col-xs-12 col-sm-6 text-center'>
                    <div id='connection'>
                        <h2 class='part-title'>Connexion</h2>
                        <form action='C/login.php' method='post'>
                            <input name='mail' placeholder='E-mail' type='text'>
                            <input name='pass' placeholder='Mot de passe' type='password'>
                            <input class='btn-orange refresh-click' type='submit' value='Valider'>
                        </form>
                        <a class='a-orange' id='inscription-switch'>Créer un compte</a>
                    </div>
                    <div id='inscription'>
                        <h2 class='part-title'>Inscription</h2>
                        <form action='./C/register.php' method='post'>
                            <input name='mail' placeholder='E-mail' type='text'>
                            <input name='pass' placeholder='Mot de passe' type='password'>
                            <input name='nom' placeholder='Nom' type='text'>
                            <input name='prenom' placeholder='Prénom' type='text'>
                            <p>Sexe:</p>
                            <select name='sex' id='sex'>
                                <option selected> Sélectionnez une de ces options</option>
                                <option value='F'>Femme</option>
                                <option value='H'>Homme</option>
                                <option value='?'>Autre</option>
                            </select>
                            <p>Date de naissance:</p>
                            <input name='birthday' type='date' id='birthday'>
                            <input class='btn-orange refresh-click' type='submit' value='Valider'>
                        </form>
                        <a class='a-orange' id='connection-switch'>Me connecter</a>
                    </div>
                </div>
            </div>";
	} else {
        echo "
            <div class='col-xs-12 col-sm-2 text-right' id='logout'>
                <a class='a-orange refresh-click' href='C/logout.php'>
                    <i class='fas fa-sign-out-alt fa-3x'></i>
                </a>
            </div>
            <div class='row'>
                <div class='col-xs-0 col-sm-6' id='div-stats'>
                    <h2 class='part-title' id='stats'>Quelques statistiques</h2>
                    <div class='esp row'>
                        <div class='col-xs-12 col-md-6 esp text-center'>
                            <i class='fas fa-user fa-7x'></i>";
            displayNbUtil();
            echo "
                        </div>
                        <div class='col-xs-12 col-md-6 esp text-center'>
                            <i class='fas fa-chart-line fa-7x'></i>";
            displayNbUtilLastMonth();
            echo "
                        </div>
                        <div class='col-xs-12 col-md-6 esp text-center'>
                            <i class='far fa-moon fa-7x'></i>";
            displayNbSoiree();
            echo"
                        </div>
                        <div class='col-xs-12 col-md-6 esp text-center'>
                            <i class='fas fa-users fa-7x'></i>";
            displayNbParticipant();
            echo "
                        </div>";
            echo "
                        <div class='col-xs-12 col-md-6 esp text-center'>
                            <i class='far fa-building fa-7x'></i>";
            displayNbDifferentLocation();
            echo "
                        </div>
                    </div>
                </div>
                <div class='col-xs-12 col-sm-6 text-center'>
                    <h2 class='part-title'>".$_SESSION['profil']['prenomUtil']."</h2>
                    <div class='esp row text-center'>
                        <table>
                            <tr>";
            displayNbFollower($_SESSION['profil']['idUtil']);
            displayNbSoireeUser($_SESSION['profil']['idUtil']);
            displayNbFollowing($_SESSION['profil']['idUtil']);
            echo "
                            </tr>
                        </table>
                    </div>
                    <div class='text-left' id='stats-perso'>";
            displayNbInvitation($_SESSION['profil']['idUtil']);
            displayNbParticipation($_SESSION['profil']['idUtil']);
            displayNbOrganisation($_SESSION['profil']['idUtil']);
            echo "
                    </div>
                    <div class='row text-center'>
                        <button class='btn-orange' id='btn-modif'>Modifier mes informations</button>
                    </div>
                    <div id='modif-compte'>
                        <p>Tu veux modifier ton compte?</p>
                        <select id='choix-modif'>
                            <option value='mail'>Mon e-mail</option>
                            <option value='pass'>Mon mot de passe</option>
                            <option value='nom'>Mon nom</option>
                            <option value='prenom'>Mon prénom</option>
                            <option value='genre'>Mon genre</option>
                            <option value='date'>Ma date de naissance</option>
                        </select>
                        <form action='./C/updateMail.php' method='post' id='form-mail'>
                            <input name='mail' type='text' placeholder='Votre nouvelle e-mail'>
                            <input name='pass' type='password' placeholder='Mot de passe de validation'>
                            <input class='btn-orange refresh-click' type='submit' value='Valider'>
                        </form>
                        <form action='./C/updatePass.php' method='post' id='form-pass'>
                            <input name='newPass' type='password' placeholder='Votre nouveau mot de passe'>
                            <input name='oldPass' type='password' placeholder='Votre ancien mot de passe'>
                            <input class='btn-orange refresh-click' type='submit' value='Valider'>
                        </form>
                        <form action='./C/updateNom.php' method='post' id='form-nom'>
                            <input name='nom' type='text' placeholder='Votre nouveau nom'>
                            <input name='pass' type='password' placeholder='Mot de passe de validation'>
                            <input class='btn-orange refresh-click' type='submit' value='Valider'>
                        </form>
                        <form action='./C/updatePrenom.php' method='post' id='form-prenom'>
                            <input name='prenom' type='text' placeholder='Votre nouveau prenom'>
                            <input name='pass' type='password' placeholder='Mot de passe de validation'>
                            <input class='btn-orange refresh-click' type='submit' value='Valider'>
                        </form>
                        <form action='./C/updateGenre.php' method='post' id='form-genre'>
                            <select name='sex' id='sex'>
                                <option selected>Sélectionnez une de ces options</option>
                                <option value='F'>Femme</option>
                                <option value='H'>Homme</option>
                                <option value='?'>Autre</option>
                            </select>
                            <input name='pass' type='password' placeholder='Mot de passe de validation'>
                            <input class='btn-orange refresh-click' type='submit' value='Valider'>
                        </form>
                        <form action='./C/updateBirthday.php' method='post' id='form-date'>
                            <input name='birthday' type='date' id='birthday'>
                            <input name='pass' type='password' placeholder='Mot de passe de validation'>
                            <input class='btn-orange refresh-click' type='submit' value='Valider'>
                        </form>
                    </div>
                </div>
            </div>
            </div>";
    }
    echo "
        </div>
    </div>";
?>