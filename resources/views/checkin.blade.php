<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Check-in</title>
    <link rel="stylesheet" href="checkin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav>
        <a href="accueil.html"><button class="btn"><i class="fa fa-home"></i> Home</button></a>
    </nav>
    <h1>Formulaire de Check-in</h1>
    <div class="container">
        <div class="form-column">
            <form id="form1">
                <label for="reservation-number">Numéro de Réservation :</label>
                <input type="text" id="reservation-number" name="reservation-number" required><br><br>
                
                <label for="passenger-name">Nom du Passager :</label>
                <input type="text" id="passenger-name" name="passenger-name" required><br><br>
            </form>
        </div>
        <div class="form-column">
            <form id="form2">
                <label for="flight-number">Numéro de Vol :</label>
                <input type="text" id="flight-number" name="flight-number" required><br><br>
                
                <label for="destination">Destination :</label><br>
                <input type="text" id="destination" name="destination"><br>
            </form>
        </div>
        <div class="form-column">
            <form id="form3">
                <label for="baggage">Bagages Enregistrés :</label>
                <input type="checkbox" id="baggage" name="baggage"><br><br>
                
                <label for="special-requirements">Exigences Particulières :</label><br>
                <textarea id="special-requirements" name="special-requirements" rows="4" cols="50"></textarea><br><br>
                
                <button type="submit">Soumettre</button>
            </form>
        </div>
    </div>
    <div id="confirmation-message" style="display: none;">
        Votre check-in a été effectué avec succès !
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var forms = document.querySelectorAll('form');
            forms.forEach(function(form) {
                form.addEventListener('submit', function (event) {
                    event.preventDefault(); // Empêche l'envoi du formulaire
        
                    // Vérifie si tous les champs requis sont remplis
                    var isValid = true;
                    var inputs = form.querySelectorAll('input[required], textarea[required], select[required]');
                    inputs.forEach(function(input) {
                        if (!input.value.trim()) {
                            isValid = false;
                        }
                    });
        
                    // Affiche le message de confirmation si tous les champs sont valides
                    if (isValid) {
                        document.getElementById('confirmation-message').style.display = 'block';
                    } else {
                        alert('Veuillez remplir tous les champs obligatoires.');
                    }
                });
            });
        });
    </script>
</body>
</html>
