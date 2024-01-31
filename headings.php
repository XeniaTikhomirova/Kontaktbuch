<?php
      if($_GET['page'] == 'delete') {
         $headline = 'Kontakt gelöscht';
      };
      if($_GET['page'] == 'contacts') {
         $headline = "Deine Kontakten";
      };
      if($_GET['page'] == 'addcontacts') {
         $headline = "Kontakten hinzufügen";
      };
      if($_GET['page'] == 'legal') {
         $headline = "Impressum";
      }
      echo '<h1> ' . $headline . '</h1>';
?>