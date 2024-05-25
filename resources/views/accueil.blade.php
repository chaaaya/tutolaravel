<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/accueil.css">


  
    <title>Accueil</title>
</head>
<body>
<header>
    <div class="logo">
        <a href="accueil.blade.php">Voyage<span>  KCS</span></a>
    </div>
    <nav>   
        <a href="accueil.blade.php">   <button class="btn"><i class="fa fa-home"></i> Home</button> </a>
        <a href="inscription.blade.php">
            <button class="btn"><i class="fa fa-user-plus"></i> S'inscrire</button>
        </a>
        <div class="dropdown">
            <button class="dropbtn"><i class="fa fa-sign-in"></i> Se connecter</button>
            <div class="dropdown-content">
                <a href="connectadmin.blade.php">Admin</a>
                <a href="connectrespo.blade.php">Responsable</a>
                <a href="connectclient.blade.php">Client</a>
            </div>
        </div>
        <a href="propos.blade.php">
            <button class="btn about"><i class="fa fa-info-circle"></i> A propos de nous</button>
        </a>    
    </nav>
</header>
<div class="meteo">
    <h2>Météo</h2>
    <a class="weatherwidget-io" href="https://forecast7.com/fr/32d34n6d38/beni-mellal/" data-label_1="BENI-MELLAL" data-label_2="METEO" data-days="7" data-theme="pure" >BENI-MELLAL WEATHER</a>
    <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
    </script>
</div>
<div class="left">
</div>
<section>
    <h1> Rechercher Vol </h1>
    <div class="block1">
        <div class="label1">
            <label>Départ</label> <br>
            <input type="text" id="search-box-depart" list="options-depart" placeholder="Tapez pour rechercher..." required>
            <datalist id="options-depart">
                <!-- Les options seront ajoutées ici -->
            </datalist>
        </div>
        <div class="label2">
            <label>Destination</label> <br>
            <input type="text" id="search-box-destination" list="options-destination" placeholder="Tapez pour rechercher..." required>
            <datalist id="options-destination">
                <!-- Les options seront ajoutées ici -->
            </datalist>
        </div>
        <div class="label3">
            <label for="date-input">Date</label>
            <input type="date" id="date-input" name="date" class="date-field" required>
        </div>
        <div>
            <a href="rechercherVol.blade.php"><button type="submit" class="styled-button"> Rechercher</button></a>
        </div>
    </div>
</section>
<div class="right">
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
  document.addEventListener('DOMContentLoaded', function () {
    const data = [
        'Agadir-Maroc', 'Casablanca-Maroc', 'Marrakech-Maroc',
        'Fès-Maroc', 'Abou dabi - Emirats arabes unites',
        'Barcelone - Espagne', 'las palmas - Espagne',
        'Paris - France', 'Berlin - Allemagne', 'Madrid - Espagne',
        'Rome - Italie', 'Londres - Royaume-Uni'
    ];

    function updateDataList(searchBoxId, dataListId) {
        const searchBox = document.getElementById(searchBoxId);
        const dataList = document.getElementById(dataListId);

        searchBox.addEventListener('input', function () {
            dataList.innerHTML = ''; // Effacer les options existantes
            const filter = searchBox.value.toLowerCase();
            const filteredData = data.filter(item => item.toLowerCase().includes(filter));

            filteredData.forEach(function (item) {
                let option = document.createElement('option');
                option.value = item;
                dataList.appendChild(option);
            });
        });
    }

    updateDataList('search-box-depart', 'options-depart');
    updateDataList('search-box-destination', 'options-destination');
});

</script>
</body>
</html>