<?php

function recherche_sauveteur($database, $value){
  // on selectionne les colonnes des sauveteurs a partir d'un mot
  // contenu soit dans le prenom, soit dans le nom du sauveteur
  $sauveteurs = $sauveteurs->query(''
  . 'SELECT `Sauveteur`.`id`, `Sauveteur`.`nom`, `Sauveteur`.`prenom` FROM `Sauveteur`'
  . "WHERE `Sauveteur`.`nom` LIKE '%$value%'"
  . "OR `Sauveteur`.`prenom` LIKE '%$value%'"
  . 'LIMIT 50'
  );  // on limite le nombre de resultats a 50

  return $sauveteurs;
}

recherche_sauveteur($db, $_POST['value']);
?>
