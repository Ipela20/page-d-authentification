<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="./script.js"></script>
    <title>Formulaire</title>
</head>
<body>
    
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Connexion</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Inscription</label>
            <div class="login-form">
                <form action="login.php" name="RegForm" method="post" onsubmit="return validation()">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="pass" class="label">Adresse mail</label>
                            <input id="pass" type="text" name="email" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Mot de passe</label>
                            <input id="pass" type="password" name="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                            <label for="check"><span class="icon"></span>Se souvenir de moi</label>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Sign in" name="valider">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <a href="#forgot">Mot de passe oublié?</a>
                        </div>
                    </div>
                </form>
                <form action="connection.php" name="RegFormSign" method="post" onsubmit="return validationSign()">
                    <div class="sign-up-htm">
                        <div class="group">
                            <label for="user" class="label">Nom d'utilisateur</label>
                            <input id="user" type="text" name="nom" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Adresse mail</label>
                            <input id="pass" type="text" name="email" class="input">
                        </div>
                        <div class="group">
                            <label for="number" class="label">Numéro de téléphone</label>
                            <input id="number" type="number" name="phone" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Mot de passe</label>
                            <input id="password" type="password" class="input" name="password" data-type="password">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Confirmer mot de passe</label>
                            <input id="cnfrm-password" type="password" class="input" name="confirmPassword" data-type="password">
                        </div>
                        <p id="message"></p>
                        <div class="group">
                            <input type="submit" class="button" value="sign-up">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <label for="tab-1">Déja inscrit?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
