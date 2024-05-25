<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/connectadmin.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Connexion Admin</title>
</head>
<body>
    <nav class="top-left">
        <a href="accueil.blade.php"><button class="btn"><i class="fa fa-home"></i> Home</button></a>
    </nav>
    <form action="admin.blade.php" method="post" class="form-container">
        <h1>Connexion Admin</h1>

        <div class="name--">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>
        </div>
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>