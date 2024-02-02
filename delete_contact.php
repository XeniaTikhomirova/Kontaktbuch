<?php

if($_GET['page'] == 'delete') {
   echo '
   <p>Dein Kontakt wurde gelöscht</p>
   <a href="?page=contacts">Zurück zu Kontakten</a>
   ';
   $index = $_GET['delete'];
   unset($contacts[$index]);
   file_put_contents('contacts.txt', json_encode(array_values($contacts), JSON_PRETTY_PRINT));

};

?>