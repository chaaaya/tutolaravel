<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../public/css/respo.css">

    <title>Espace responsable d'application</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <a href="accueil.blade.php">Voyage<span>  KCS</span></a>
         </div>
        <ul>
           
            <li>
                <a href="#" data-target="manage-admins"><i class="fa fa-users"></i> Gérer les comptes d'administrateurs</a>
            </li>
            <li>
                <a href="#" data-target="analyze-reports"><i class="fa fa-bar-chart"></i> Analyser les rapports des administrateurs <span class="badge">5</span></a>
            </li>
            <li>
                <a href="#" data-target="communicate"><i class="fa fa-comments"></i> Communiquer avec les parties prenantes</a>
            </li>
            <li>
                <a href="#" data-target="continuity-plans"><i class="fa fa-clipboard"></i> Élaborer des plans de continuité</a>
            </li>
            <li>
                <a href="#" data-target="settings"><i class="fa fa-cogs"></i> Paramètres</a>
            </li>
            <li>
                <a href="#" id="logout-btn"><i class="fa fa-sign-out"></i> Se déconnecter</a>
            </li>
        </ul>
    </div>
    <div class="content">
        <div id="dashboard" class="content-panel active">
            <h1>Tableau de Bord</h1>
            <!-- Contenu du tableau de bord ici -->
        </div>
        <div id="manage-admins" class="content-panel">
            <h1>Gérer les comptes d'administrateurs</h1>
            <button id="add-admin-btn" class="btn btn-primary">Ajouter un administrateur</button>
            <div id="add-admin-form-container" class="form-container" style="display: none;">
                <form id="add-admin-form">
                    <h2>Ajouter un administrateur</h2>
                    <label for="admin-name">Nom :</label>
                    <input type="text" id="admin-name" name="admin-name" required>
                    <label for="admin-email">Email :</label>
                    <input type="email" id="admin-email" name="admin-email" required>
                    <label for="admin-role">Rôle :</label>
                    <input type="text" id="admin-role" name="admin-role" required>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Rôle</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="admin-list">
                        <tr>
                            <td>1</td>
                            <td>Admin 1</td>
                            <td>admin1@example.com</td>
                            <td>Super Admin</td>
                            <td>
                                <button class="btn btn-link">Modifier</button>
                                <button class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        <!-- Autres utilisateurs ici -->
                    </tbody>
                </table>
            </div>
        </div>
        <div id="analyze-reports" class="content-panel">
            <h1>Analyser les rapports des administrateurs</h1>
            <!-- Contenu pour analyser les rapports ici -->
            <div class="report-filters">
                <label for="report-date">Date :</label>
                <input type="date" id="report-date">
                
                <label for="report-admin">Administrateur :</label>
                <select id="report-admin">
                    <option value="all">Tous</option>
                    <option value="admin1">Admin 1</option>
                    <option value="admin2">Admin 2</option>
                </select>
                
                <label for="report-type">Type de rapport :</label>
                <select id="report-type">
                    <option value="all">Tous</option>
                    <option value="type1">Type 1</option>
                    <option value="type2">Type 2</option>
                </select>
                
                <button id="filter-reports" class="btn btn-primary">Filtrer</button>
            </div>
            
            <div class="report-summary">
                <h2>Résumé des Rapports</h2>
                <p>Total des rapports : <span id="total-reports">50</span></p>
                <p>Rapports en attente : <span id="pending-reports">5</span></p>
            </div>
            
            <div class="export-buttons">
                <button id="export-pdf" class="btn btn-secondary">Exporter en PDF</button>
                <button id="export-excel" class="btn btn-secondary">Exporter en Excel</button>
                
            </div>
            
            <div class="report-table-container">
                <table id="report-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Administrateur</th>
                            <th>Type</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="report-list">
                        <!-- Les rapports seront insérés ici dynamiquement -->
                    </tbody>
                </table>
            </div>
               
        </div>
        <div id="communicate" class="content-panel">
            <h1>Communiquer avec les parties prenantes</h1>
            <!-- Contenu pour communiquer avec les parties prenantes ici -->
        </div>
        <div id="continuity-plans" class="content-panel">
            <h1>Élaborer des plans de continuité</h1>
            <!-- Contenu pour élaborer des plans de continuité ici -->
        </div>
        <div id="settings" class="content-panel">
            <h1>Paramètres</h1>
            <!-- Contenu des paramètres ici -->
        </div>
        <div id="logout" class="content-panel">
            <h1>Se déconnecter</h1>
            <!-- Contenu de déconnexion ici -->
        </div>
    </div>

    <!-- Modal pour confirmation de déconnexion -->
    <div id="logout-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>Confirmation</h2>
            <p>Voulez-vous vraiment vous déconnecter ?</p>
            <button id="confirm-logout" class="btn btn-danger">Se déconnecter</button>
            <button id="cancel-logout" class="btn">Annuler</button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    var menuItems = document.querySelectorAll('.sidebar ul li a');
    var contentPanels = document.querySelectorAll('.content-panel');
    var addAdminBtn = document.getElementById('add-admin-btn');
    var addAdminFormContainer = document.getElementById('add-admin-form-container');
    var logoutBtn = document.getElementById('logout-btn');
    var modal = document.getElementById('logout-modal');
    var closeBtn = document.querySelector('.close-btn');
    var confirmLogoutBtn = document.getElementById('confirm-logout');
    var cancelLogoutBtn = document.getElementById('cancel-logout');

    menuItems.forEach(function(item) {
        item.addEventListener('click', function(event) {
            event.preventDefault();
            var targetId = item.getAttribute('data-target');

            // Masquer tous les panneaux de contenu
            contentPanels.forEach(function(panel) {
                panel.classList.remove('active');
            });

            // Afficher le panneau de contenu cible
            if (targetId) {
                var targetPanel = document.getElementById(targetId);
                targetPanel.classList.add('active');
            }

            // Supprimer la classe active de tous les éléments du menu
            menuItems.forEach(function(menuItem) {
                menuItem.classList.remove('active');
            });

            // Ajouter la classe active à l'élément du menu cliqué
            item.classList.add('active');
        });
    });

    addAdminBtn.addEventListener('click', function() {
        addAdminFormContainer.style.display = 'block';
    });

    document.getElementById('add-admin-form').addEventListener('submit', function(event) {
        event.preventDefault();
        // Ajouter le nouvel administrateur à la liste (cette partie doit être adaptée pour gérer l'ajout réel dans votre système)
        var name = document.getElementById('admin-name').value;
        var email = document.getElementById('admin-email').value;
        var role = document.getElementById('admin-role').value;
        
        var adminList = document.getElementById('admin-list');
        var newRow = document.createElement('tr');
        newRow.innerHTML = '<td>' + (adminList.rows.length + 1) + '</td><td>' + name + '</td><td>' + email + '</td><td>' + role + '</td><td><button class="btn btn-link">Modifier</button> <button class="btn btn-danger">Supprimer</button></td>';
        adminList.appendChild(newRow);

        // Réinitialiser le formulaire et masquer
        this.reset();
        addAdminFormContainer.style.display = 'none';
    });

    logoutBtn.addEventListener('click', function(event) {
        event.preventDefault();
        // Afficher la fenêtre modale pour confirmation
        modal.style.display = 'block';
    });

    closeBtn.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    cancelLogoutBtn.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    confirmLogoutBtn.addEventListener('click', function() {
        // Code pour gérer la déconnexion
        alert("Vous êtes déconnecté.");
        window.location.href = "connectrespo.blade.php"; // Redirigez vers la page de connexion
    });

    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
});
<!----------------script exportation des rapports------------>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
    <script>
        document.getElementById('export-pdf').addEventListener('click', function() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();
    
            doc.text("Rapports des Administrateurs", 10, 10);
            
            const reportTable = document.getElementById('report-table');
            const rows = reportTable.querySelectorAll('tr');
            let rowData = [];
            
            rows.forEach((row) => {
                let columns = row.querySelectorAll('th, td');
                let rowContent = [];
                columns.forEach((col) => {
                    rowContent.push(col.innerText);
                });
                rowData.push(rowContent);
            });
    
            doc.autoTable({
                head: [rowData[0]],
                body: rowData.slice(1)
            });
    
            doc.save('Rapports_Administrateurs.pdf');
        });
    
        document.getElementById('export-excel').addEventListener('click', function() {
            const wb = XLSX.utils.book_new();
            const ws = XLSX.utils.table_to_sheet(document.getElementById('report-table'));
            XLSX.utils.book_append_sheet(wb, ws, 'Rapports');
    
            XLSX.writeFile(wb, 'Rapports_Administrateurs.xlsx');
        });
    
        document.getElementById('export-csv').addEventListener('click', function() {
            const csv = [];
            const rows = document.querySelectorAll('#report-table tr');
            
            rows.forEach((row) => {
                const cols = row.querySelectorAll('td, th');
                const csvRow = [];
                cols.forEach((col) => {
                    csvRow.push(col.innerText);
                });
                csv.push(csvRow.join(','));
            });
    
            const csvString = csv.join('\n');
            const blob = new Blob([csvString], { type: 'text/csv' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.setAttribute('hidden', '');
            a.setAttribute('href', url);
            a.setAttribute('download', 'Rapports_Administrateurs.csv');
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        });
    </script>
    
</body>
</html>