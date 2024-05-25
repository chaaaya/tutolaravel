<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../public/css/inscription.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Inscription</title>
</head>
<body>
  <nav>
    <a href="accueil.blade.php">   <button class="btn"><i class="fa fa-home"></i> Home</button> </a>

  </nav>
 <div class="form-container">

  <form action="" method="post">
    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom" placeholder="Votre nom" required><br>

    <label for="prenom">Prénom</label>
    <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required><br>
    <label for="telephone">Numéro de téléphone</label><br>
    <input type="tel" id="telephone" name="telephone" 
          placeholder="Votre numéro de téléphone"
          pattern="[0-9]{10}" max="10"
           required><br>
<br>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="EMAIL" required><br>

    
    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" placeholder="Votre mot de passe" required><br>

    <label for="confirm_password">Confirmez le mot de passe</label>
    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmez votre mot de passe" required><br>

    <div id="message"></div>  <!-- Zone pour afficher les messages -->

    <input type="submit" value="Envoyer">
  </form>
</div>

<script>
  document.getElementById('telephone').addEventListener('input', function(e) {
      // Remplace toute entrée non numérique
      e.target.value = e.target.value.replace(/[^0-9]/g, '');
  });
</script>

</body>
</html>