
function openTab(x){
    let btns = document.querySelectorAll(".tab-btn");
    let contents = document.querySelectorAll(".tab-content");
    
    for(let i=0; i<contents.length; i++){
        
        contents[i].style.display = "none"; // Cache chaque contenu d'onglet 
        btns[i].classList.remove("active"); // Supprime la classe "active" de chaque bouton d'onglet
   }
 
   contents[x].style.display = "block";  // Affiche le contenu de l'onglet correspondant à l'index 'x'
   btns[x].classList.add("active");    // Ajoute la classe "active" au bouton d'onglet correspondant à l'index 'x'

}
// Optionnel : afficher le premier onglet par défaut
//openTab(0);