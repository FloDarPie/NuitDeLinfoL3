const obtenir_sauveteur = new XMLHttpRequest()
obtenir_sauveteur.onreadystatechange = function() {
  if(this.readyState == 4 && this.status == 200){
console.log('jey');
    const text = obtenir_sauveteur.responseText

    document.body.innerHTML = "" // retire tous les enfants de body
    document.body.innerHTML = text
  }
}

const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const id = urlParams.get('id')

obtenir_sauveteur.open("POST", "/php/get/sauveteur.php", true)
obtenir_sauveteur.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')

console.log(id);

obtenir_sauveteur.send('id=' + id)
