<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/connectClient.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>connecter client</title>
</head>
<body>
    <nav>
        <a href="accueil.blade.php" class="home-btn">
            <i class="fa fa-home"></i> Home
        </a>
    </nav>
    <div class="container">
        <div class="container-onglets">
            <button onclick="openTab(0)" class="tab-btn active">Non abonné</button>
            <button onclick="openTab(1)" class="tab-btn">Abonné</button>
        </div>
        <div class="contenu">
            <div class="tab-content active">
                <form action="nonabonne.blade.php" method="post">
                    <div class="name--">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="btn-form">
                        <input type="submit" value="Se connecter">
                    </div>
                </form>
            </div>
            <div class="tab-content">
                <form action="abonne.blade.php" method="post">
                    <div class="name--">
                        <label for="abonnement-numero">Numéro de carte d'abonnement</label>
                        <input type="text" id="abonnement-numero" name="abonnement-numero" pattern="[0-9]{10}" title="Veuillez entrer un numéro de 10 chiffres sans aucun espace ni caractère spécial." required>
                    </div>
                    <div class="name--">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="btn-form">
                        <input type="submit" value="Se connecter">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../../public/css/connectClient.js"></script>
</body>
</html>