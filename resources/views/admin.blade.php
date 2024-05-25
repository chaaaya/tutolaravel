<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../../public/css/admin.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin - Gestion des utilisateurs</title>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
                <a href="accueil.blade.php">Voyage<span>  KCS</span></a>
             </div>
            <nav>
                <ul>
                    <li><a href="#" class="nav-link" data-target="dashboard"><i class="fa fa-tachometer"></i> Tableau des nouvelles</a></li>
                    <li><a href="#" class="nav-link" data-target="user-management"><i class="fa fa-users"></i> Gestion des Utilisateurs</a></li>
                    <li><a href="#" class="nav-link" data-target="offers-management"><i class="fa fa-gift"></i> Gestion des Offres</a></li>
                    <li><a href="#" class="nav-link" data-target="reports-management"><i class="fa fa-file-text"></i> Rapports</a></li>
                    <li><a href="#" class="nav-link" data-target="settings"><i class="fa fa-cog"></i> Paramètres</a></li>
                    <li><a href="connectadmin.blade.php"><i class="fa fa-sign-out"></i> Se déconnecter</a></li>
                </ul>
            </nav>
        </aside>
        <main class="content">
           
            <section id="main-content">
                <!-- Content will be loaded here based on the sidebar navigation -->
            </section>
        </main>
    </div>

    <script>
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault(); // Empêche le lien de naviguer vers une autre page
                const target = this.getAttribute('data-target'); // Récupère l'attribut data-target
                loadContent(target); // Charge le contenu correspondant
            });
        });

        function loadContent(target) {
            const contentSection = document.getElementById('main-content');
            if (target === 'user-management') {
                contentSection.innerHTML = `
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
                        </tbody>
                    </table>

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
                `;
                document.querySelector('.add-user').addEventListener('click', function(e) {
                    e.preventDefault();
                    document.getElementById('add-user-form').style.display = 'block';
                });
            } else if (target === 'dashboard') {
                contentSection.innerHTML = `       
                    <div class="header">
                        <h1>Tableau des nouvelles</h1>
                    </div>
                    <div class="grid-container">
                        <section id="dashboard" class="grid-item">
                            <h2>Tableau de Bord</h2>
                            <table class="simple-table">
                                <thead>
                                    <tr>
                                        <th>Catégorie</th>
                                        <th>Quantité</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nouveaux Utilisateurs</td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>Offres en Cours</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>Rapports Récents</td>
                                        <td>10</td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                    <p>Ici vous pouvez afficher des informations spécifiques au tableau des nouvelles.</p>
                `;

            } else if (target === 'offers-management') {
                contentSection.innerHTML = `
                    <div class="header">
                        <h1>Gestion des Offres</h1>
                    </div>
                    <a href="#add-offer-form" class="add-offer">Ajouter une offre</a>
                    <table class="offer-list">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Date de début</th>
                                <th>Date de fin</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Offre spéciale</td>
                                <td>20% de réduction sur tous les produits</td>
                                <td>2024-05-01</td>
                                <td>2024-05-31</td>
                                <td class="actions">
                                    <a href="#edit-offer">Modifier</a>
                                    <button>Supprimer</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div id="add-offer-form" style="display: none;">
                        <h2>Ajouter une offre</h2>
                        <form action="" method="post">
                            <label for="offer-name">Nom</label>
                            <input type="text" id="offer-name" name="offer-name" required>
                            <label for="description">Description</label>
                            <input type="text" id="description" name="description" required>
                            <label for="start-date">Date de début</label>
                            <input type="date" id="start-date" name="start-date" required>
                            <label for="end-date">Date de fin</label>
                            <input type="date" id="end-date" name="end-date" required>
                            <input type="submit" value="Ajouter">
                        </form>
                    </div>
                `;
                document.querySelector('.add-offer').addEventListener('click', function(e) {
                    e.preventDefault();
                    document.getElementById('add-offer-form').style.display = 'block';
                });
            } else if (target === 'reports-management') {
                contentSection.innerHTML = `
                    <div class="header">
                        <h1>faire desRapports</h1>
                    </div>
                    <a href="#add-report-form" class="add-report">Ajouter un rapport</a>
                    <div class="report-cards">
                        <div class="report-card">
                            <h3>Rapport Mensuel</h3>
                            <p>Date de Création: 2024-05-01</p>
                            <div class="card-actions">
                                <a href="#edit-report" class="edit-btn">Modifier</a>
                                <button class="delete-btn">Supprimer</button>
                            </div>
                        </div>
                    </div>

                    <div id="add-report-form" style="display: none;">
                        <h2>Ajouter un rapport</h2>
                        <form action="" method="post">
                            <label for="report-name">Nom</label>
                            <input type="text" id="report-name" name="report-name" required>
                            <label for="creation-date">Date de Création</label>
                            <input type="date" id="creation-date" name="creation-date" required>
                            <input type="submit" value="Ajouter">
                        </form>
                    </div>
                `;
                document.querySelector('.add-report').addEventListener('click', function(e) {
                    e.preventDefault();
                    document.getElementById('add-report-form').style.display = 'block';
                });
            } else if (target === 'settings') {
                contentSection.innerHTML = `
                    <div class="header">
                        <h1>Paramètres</h1>
                    </div>
                    
                        <h2>Paramètres Généraux</h2>
                        <form action="" method="post">
                            <label for="theme">Thème</label>
                            <select id="theme" name="theme">
                                <option value="light">Clair</option>
                                <option value="dark">Sombre</option>
                            </select>
                            <label for="language">Langue</label>
                            <select id="language" name="language">
                                <option value="fr">Français</option>
                                <option value="en">Anglais</option>
                            </select>
                            <label for="notifications">Notifications</label>
                            <input type="checkbox" id="notifications" name="notifications"> Activer les notifications
                            <input type="submit" value="Enregistrer">
                        </form>
                    </div>
                `;
            }
        }
    </script>
</body>
</html>