function deleteConfirm(event) {
  // EMPECHE LE COMPORTEMENT DU NAVIGATEUR PAR DEFAUT
  event.preventDefault();

  // AFFICHE D'UNE BOITE DE DIALOGUE DE CONFIRMATION
  var confirmation = confirm("Voulez-vous vraiment supprimer cet élément?");

  if (confirmation) {
    // RECUPERATION DE L'ID DE L'ELEMENT VIA L'ATTRIBUT "data-id"
    var id = event.target.getAttribute("data-id");
    // REQUETE AJAX (ASYNC) POUR SUPPRIMER L'ELEMENT
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "../controllers/delete-potions.php?id=" + id, true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
        // REDIRECTION DE L'UTILISATEUR COTE CLIENT
        window.location.href = "../pages/produits.php";
      }
    };
    xhr.send();
  }
}
