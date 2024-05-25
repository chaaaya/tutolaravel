// script.js
document.addEventListener('DOMContentLoaded', function () {
    const dataList = document.getElementById('options');
    const searchBox = document.getElementById('search-box');
    const data = [
        'Agadir-Maroc',  'Casablanca-Maroc','Marrakech-Maroc',
        'Fès-Maroc', 'Abou dabi - Emirats arabes unites',
        'Barcelone - Espagne', 'las palmas - Espagne',
        'Paris - France', 'Berlin - Allemagne', 'Madrid - Espagne',
        'Rome - Italie', 'Londres - Royaume-Uni'
    ];
    function updateDataList() {
        dataList.innerHTML = ''; // Effacer les options existantes
        const filter = searchBox.value.toLowerCase();
        const filteredData = data.filter(item => item.toLowerCase().includes(filter));

        filteredData.forEach(function(item) {
            let option = document.createElement('option');
            option.value = item;
            dataList.appendChild(option);
        });
    }

    searchBox.addEventListener('input', updateDataList);
});