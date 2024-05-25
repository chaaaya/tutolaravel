<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Abonné</title>
    <link rel="stylesheet" href="../../public/css/abonne.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Réinitialisation des styles de base */
        * {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html, body {
            height: 100%;
            margin: 0;
        }
        /* Styles généraux */
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            color: #333;
            line-height: 1.6;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            flex: 1;
        }

        h1, h2, h3 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 15px;
        }

        /* Navigation */
        header {
            position: relative;
            height: 80px; 
            width: 100%;
            text-align: center;
            padding: 10px;
            background-color: #2c2c2c;
        }

        header .btn {
            background-color: transparent;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            display: inline-block;
        }

        nav {
            display: flex;
            justify-content: center;
        }

        #logout-btn {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .logo a {
            color: #fff;
            padding: 2px 20px;
            border: 3px solid #fff;
            position: absolute;
            top: 10px;
            left: 10px;
            text-transform: uppercase;
            text-decoration: none;
            font-weight: 900;
            text-shadow: rgba(0, 0, 0, 0.7);
            font-size: large;
        }

        .logo span {
            color: #658faf;
            font-weight: bold;
            font-size: xx-large;
        }

        .btn {
            background-color: #658faf;
            color: white;
            border: none;
            padding: 12px 24px;
            margin: 10px 5px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #527692;
        }

        header a:hover, footer a:hover {
            color: #658faf;
        }

        .block {
            width: 650px;
        }

        /* Formulaires */
        form {
            max-width: 500px;
            margin: 0 auto;
        }

        form label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        form input[type="text"],
        form input[type="email"],
        form textarea {
            width: calc(100% - 20px);
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        form input[type="submit"] {
            background-color: #2980b9;
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #2471a3;
        }

        /* Footer */
        footer {
            grid-area: footer;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            height: 40px;
            bottom: 0;
        }
        footer .legal, footer .contact, footer .social-media {
            display: flex;
            gap: 10px;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }

        /* Section de réservation masquée par défaut */
        .hidden {
            display: none;
        }

        .close-btn {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close-btn:hover,
        .close-btn:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <a href="accueil.html">Voyage<span> KCS</span></a>
        </div>
        <nav>
            <a href="accueil.html"><button class="btn"><i class="fa fa-home"></i> Home</button></a>
            <a href="#" id="btn-exclusives"><button class="btn"><i class="fa fa-star"></i> Offres Exclusives</button></a>
            <a href="#" id="btn-fidelite"><button class="btn"><i class="fa fa-gift"></i> Programme de Fidélité</button></a>
            <a href="#" id="btn-services-supplementaires"><button class="btn"><i class="fa fa-gift"></i> Services Supplémentaires</button></a>
        </nav>
        <a href="connectclient.html" id="logout-btn"><button class="btn"><i class="fa fa-sign-out"></i> Se déconnecter</button></a>
    </header>
    <div class="container">
        <h1>Bienvenue sur notre site de réservation de vols</h1>
        <a href="#" id="btn-reserver-vol" class="btn">Réserver un vol</a>
        <a href="#" id="btn-historique-vols" class="btn">Historique des vols</a>
        <a href="#" id="btn-consulter-offres" class="btn">Consulter nos offres</a>
        <a href="#" id="btn-suivre-vols" class="btn">Suivre les vols</a>
    </div>

    <div id="reservation-section" class="container hidden">
        <!-- Contenu dynamique ici -->
    </div>
    
    <footer>
        <div class="legal">
            <a href="#">Mentions légales</a>
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

    <script>
        // Sélection des boutons et de la section de réservation
        const btnReserverVol = document.getElementById('btn-reserver-vol');
        const btnHistoriqueVols = document.getElementById('btn-historique-vols');
        const btnConsulterOffres = document.getElementById('btn-consulter-offres');
        const btnSuivreVols = document.getElementById('btn-suivre-vols');
        const reservationSection = document.getElementById('reservation-section');

        // Gestion des clics sur les boutons
        btnReserverVol.addEventListener('click', function () {
            reservationSection.innerHTML = `
                <div>
                    <span class="close-btn" onclick="document.getElementById('reservation-section').classList.add('hidden')">&times;</span>
                    <h2>Réservation de vol</h2>
                    <p>Réservez votre vol dès maintenant !</p>
                    <!-- Formulaire de réservation ici -->
                </div>
            `;
            reservationSection.classList.remove('hidden');
        });

        btnHistoriqueVols.addEventListener('click', function () {
            reservationSection.innerHTML = `
                <div>
                    <span class="close-btn" onclick="document.getElementById('reservation-section').classList.add('hidden')">&times;</span>
                    <h2>Historique des vols</h2>
                    <p>Consultez l'historique de vos vols précédents.</p>
                    <!-- Contenu de l'historique des vols ici -->
                </div>
            `;
            reservationSection.classList.remove('hidden');
        });

        btnConsulterOffres.addEventListener('click', function () {
            reservationSection.innerHTML = `
                <div>
                    <span class="close-btn" onclick="document.getElementById('reservation-section').classList.add('hidden')">&times;</span>
                    <h2>Nos offres</h2>
                    <p>Découvrez nos offres spéciales et promotions !</p>
                    <!-- Contenu des offres ici -->
                </div>
            `;
            reservationSection.classList.remove('hidden');
        });

        document.getElementById('btn-exclusives').addEventListener('click', function () {
            reservationSection.innerHTML = `
                <div>
                    <span class="close-btn" onclick="document.getElementById('reservation-section').classList.add('hidden')">&times;</span>
                    <h2>Offres Exclusives</h2>
                    <p>Profitez de nos offres exclusives réservées à nos clients fidèles.</p>
                    <!-- Contenu des offres exclusives ici -->
                </div>
            `;
            reservationSection.classList.remove('hidden');
        });

        document.getElementById('btn-fidelite').addEventListener('click', function () {
            reservationSection.innerHTML = `
                <div>
                    <span class="close-btn" onclick="document.getElementById('reservation-section').classList.add('hidden')">&times;</span>
                    <h2>Programme de Fidélité</h2>
                    <p>Découvrez notre programme de fidélité et bénéficiez de nombreux avantages :</p>
                    <ul>
                        <li>Accumulez des points à chaque vol</li>
                        <li>Bénéficiez de réductions exclusives</li>
                        <li>Accès prioritaire à nos services</li>
                        <li>Offres spéciales pour les membres</li>
                    </ul>
                    <p>Inscrivez-vous dès maintenant et commencez à accumuler des points !</p>
                </div>
            `;
            reservationSection.classList.remove('hidden');
        });

        btnSuivreVols.addEventListener('click', function () {
            reservationSection.innerHTML = `
                <div>
                    <span class="close-btn" onclick="document.getElementById('reservation-section').classList.add('hidden')">&times;</span>
                    <h2>Suivre les vols</h2>
                    <p>Suivez l'état de vos vols en temps réel.</p>
                    <!-- Contenu pour suivre les vols ici -->
                </div>
            `;
            reservationSection.classList.remove('hidden');
        });
        const btnServicesSupplementaires = document.getElementById('btn-services-supplementaires');

btnServicesSupplementaires.addEventListener('click', function () {
    reservationSection.innerHTML = `
        <div>
            <span class="close-btn" onclick="document.getElementById('reservation-section').classList.add('hidden')">&times;</span>
            <h2>Services Supplémentaires</h2>
            <p>Réservez votre hôtel ou louez une voiture :</p>
            <ul>
                <li>Réservez un hôtel</li>
                <li>Louez une voiture</li>
            </ul>
            <!-- Contenu pour réserver un hôtel ou louer une voiture ici -->
        </div>
    `;
    reservationSection.classList.remove('hidden');
});

    </script>
</body>
</html>