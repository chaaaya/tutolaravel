<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="accueil.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Résultats de Vol</title>
</head>
<body>
<header>
    <div class="logo">
        <a href="#">Voyage<span>  KCS</span></a>
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
<section>
    <h1>Résultats de Vol</h1>
    <div id="results" class="results">
        <h3>Résultats de recherche</h3>
        <table>
            <thead>
                <tr>
                    <th>Vol</th>
                    <th>Départ</th>
                    <th>Destination</th>
                    <th>Date</th>
                    <th>Heure</th>
                    <th>Prix</th>
                    <th>Réserver</th>
                </tr>
            </thead>
            <tbody id="results-body">
                <!-- Les résultats seront ajoutés ici dynamiquement -->
            </tbody>
        </table>
    </div>
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
<script>
    // Exemple de données de vols disponibles
    const flights = [
        { vol: 'AF1234', depart: 'Paris', destination: 'New York', date: '2024-06-20', heure: '10:00', prix: '€450' },
        { vol: 'BA5678', depart: 'Paris', destination: 'Londres', date: '2024-06-21', heure: '11:00', prix: '€200' },
        // Ajoutez d'autres vols ici
    ];

    // Récupérer les paramètres de l'URL
    const urlParams = new URLSearchParams(window.location.search);
    const departure = urlParams.get('departure');
    const destination = urlParams.get('destination');
    const date = urlParams.get('date');

    // Filtrer les vols en fonction des critères de recherche
    const results = flights.filter(flight => flight.depart === departure && flight.destination === destination && flight.date === date);

    // Afficher les résultats dans le tableau
    const resultsBody = document.getElementById('results-body');
    resultsBody.innerHTML = '';

    results.forEach(flight => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${flight.vol}</td>
            <td>${flight.depart}</td>
            <td>${flight.destination}</td>
            <td>${flight.date}</td>
            <td>${flight.heure}</td>
            <td>${flight.prix}</td>
            <td><button type="button">Réserver</button></td>
        `;
        resultsBody.appendChild(row);
    });
</script>
</body>
</html>