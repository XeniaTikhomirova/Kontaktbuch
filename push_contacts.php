<?php

error_reporting(E_ALL);
ini_set("display_errors", "On");

   // Chicking if the data was added:

   if ( isset($_POST['name']) && isset($_POST['phone']) ) {
      
      if (strlen($_POST['name']) >= 1 && strlen($_POST['phone']) >= 3) {
         echo '<h4>Kontakt <em>'. $_POST['name'] .'</em> wurde hinzugefügt </h4>';
         
      // Create new object with entered data:
      $newContact = [
         'name' => $_POST['name'],
         'phone' => $_POST['phone']
      ];

      // Push the array:
      array_push($contacts, $newContact);

      // Function to store all Contacts:
      file_put_contents('contacts.txt', json_encode($contacts, JSON_PRETTY_PRINT));

      echo '<a href="?page=contacts">Weiter zu Kontakten</a>';
      }
   };



?>