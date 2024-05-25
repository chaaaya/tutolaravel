<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="accueil.css" type="text/css"/>
    <title>Résultats de la recherche</title>
</head>
<body>
<header>
    <div class="logo">
        <a href="#">Voyage<span> KCS</span></a>
    </div>
    <nav>   
        <a href="accueil.html"><button class="btn"><i class="fa fa-home"></i> Home</button></a>
        <a href="inscription.html"><button class="btn"><i class="fa fa-user-plus"></i> S'inscrire</button></a>
        <div class="dropdown">
            <button class="dropbtn"><i class="fa fa-sign-in"></i> Se connecter</button>
            <div class="dropdown-content">
                <a href="connectadmin.html">Admin</a>
                <a href="connectrespo.html">Responsable</a>
                <a href="connectClient.html">Client</a>
            </div>
        </div>
        <a href="propos.html"><button class="btn about"><i class="fa fa-info-circle"></i> A propos de nous</button></a>    
    </nav>
</header>

<section class="results">
    <h1>Résultats de la recherche de vol</h1>
    <table class="flights-table">
        <thead>
            <tr>
                <th>Départ</th>
                <th>Destination</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Prix</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Paris</td>
                <td>New York</td>
                <td>2024-06-01</td>
                <td>10:00 AM</td>
                <td>500dh</td>
                <td><button class="reserve-btn">Réserver</button></td>
            </tr>
            <tr>
                <td>Rome</td>
                <td>Tokyo</td>
                <td>2024-06-02</td>
                <td>11:00 AM</td>
                <td>1000DH</td>
                <td><button class="reserve-btn">Réserver</button></td>
            </tr>
            <tr>
                <td>London</td>
                <td>Sydney</td>
                <td>2024-06-03</td>
                <td>12:00 PM</td>
                <td>800DH</td>
                <td><button class="reserve-btn">Réserver</button></td>
            </tr>
            <!-- Ajouter d'autres vols selon les résultats de la recherche -->
        </tbody>
    </table>
</section>

<footer>
    <div class="legal">
        <a href="#">Mentions légales</a>
        <a href="#">Politique de confidentialité</a>
    </div>
    <div class="contact">
        <a href="#">Contact</a>
    </div>
    <div class="social-media">
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>
        <a href="#">Instagram</a>
    </div>
</footer>
</body>
</html>