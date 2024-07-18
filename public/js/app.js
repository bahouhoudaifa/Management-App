
window.onload = function() {
    // Récupérer la date actuelle
    var today = new Date();
    
    // Obtenir le format YYYY-MM-DD requis pour le champ de date
    var yyyy = today.getFullYear();
    var mm = String(today.getMonth() + 1).padStart(2, '0'); // Ajouter un zéro en tête si nécessaire
    var dd = String(today.getDate()).padStart(2, '0'); // Ajouter un zéro en tête si nécessaire
    var formattedDate = yyyy + '-' + mm + '-' + dd;
    
    // Définir la date par défaut dans le champ de date
    document.getElementById('date').value = formattedDate;
  }


  // Get the current date
  var currentDate = new Date();
    
  // Format the current date to be compatible with input type="date"
  var year = currentDate.getFullYear();
  var month = (currentDate.getMonth() + 1).toString().padStart(2, '0');
  var day = currentDate.getDate().toString().padStart(2, '0');
  var formattedDate = year + '-' + month + '-' + day;

  // Set the input value to the current date
  document.getElementById('dateabsence').value = formattedDate;