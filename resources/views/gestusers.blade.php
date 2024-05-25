<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gestusers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin - Gestion des utilisateurs</title>
</head>
<body>
    <nav>
        <a href="accueil.html">   <button class="btn"><i class="fa fa-home"></i> Home</button> </a>
    
      </nav>
    <div class="container">
        <div class="header">
            <h1>Gestion des utilisateurs</h1>
        </div>
        <a href="#add-user-form" class="add-user">Ajouter un utilisateur</a>
        <table class="user-list">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Rôle</th>
                    <th>Date d'inscription</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Exemple d'utilisateur -->
                <tr>
                    <td>1</td>
                    <td>Jean Dupont</td>
                    <td>jean.dupont@example.com</td>
                    <td>Utilisateur</td>
                    <td>2024-01-01</td>
                    <td class="actions">
                        <a href="#edit-user">Modifier</a>
                        <button>Supprimer</button>
                    </td>
                </tr>
                <!-- Ajouter d'autres utilisateurs ici -->
            </tbody>
            <tbody>
                <!-- Exemple d'utilisateur -->
                <tr>
                    <td>1</td>
                    <td>Jean Dupont</td>
                    <td>jean.dupont@example.com</td>
                    <td>Utilisateur</td>
                    <td>2024-01-01</td>
                    <td class="actions">
                        <a href="#edit-user">Modifier</a>
                        <button>Supprimer</button>
                    </td>
                </tr>
                <!-- Ajouter d'autres utilisateurs ici -->
            </tbody>
        </table>

        <!-- Formulaire d'ajout d'utilisateur (masqué par défaut) -->
        <div id="add-user-form" style="display: none;">
            <h2>Ajouter un utilisateur</h2>
            <form action="" method="post">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <label for="role">Rôle</label>
                <select id="role" name="role">
                    <option value="admin">Administrateur</option>
                    <option value="user">Utilisateur</option>
                </select>
                <input type="submit" value="Ajouter">
            </form>
        </div>
    </div>

    <script>
        // Script pour afficher le formulaire d'ajout d'utilisateur
        document.querySelector('.add-user').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('add-user-form').style.display = 'block';
        });
    </script>
</body>
</html>
