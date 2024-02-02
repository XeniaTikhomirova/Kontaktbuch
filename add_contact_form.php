<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");
?>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<?php

      if ($_GET['page'] == 'addcontacts') {
         echo "
         <div>
            Hier kannst du Kontakten hinzufügen.
         </div>


         <form method='POST' class=form_submit>

            <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
               <input class=\"mdl-textfield__input\" type=\"text\" id=\"sample3\" name='name'>
               <label class=\"mdl-textfield__label\" for=\"sample3\">Name eingeben</label>
            </div>

            <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
               <input class=\"mdl-textfield__input\" type=\"text\" pattern=\"-?[0-9]*(\.[0-9]+)?\" id=\"sample4\" name='phone'>
               <label class=\"mdl-textfield__label\" for=\"sample4\">Telefonnummer eingeben</label>
               <span class=\"mdl-textfield__error\">Input is not a number!</span>
            </div>

            <button class= \"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\" >
            Ansenden
            </button>

         </form>

         ";
      };

?>