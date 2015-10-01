<?php
// Création schema vierge
echo "php app/console doctrine:schema:create<br/>";
$output = shell_exec('php app/console doctrine:schema:create');
echo "<pre>$output</pre>";

// Creation base de données 
echo "php app/console doctrine:database:create<br/>";
$output = shell_exec('php app/console doctrine:database:create');
echo "<pre>$output</pre>";

// Mise à jour du schéma et base de données
echo "php app/console doctrine:schema:update --force<br/>";
$output = shell_exec('php app/console doctrine:schema:update --force');
echo "<pre>$output</pre>";

echo "<br/><b>--END--</b><br/>";
?>
