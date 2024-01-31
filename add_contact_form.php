<?php
      if ($_GET['page'] == 'addcontacts') {
         echo "
         <div>
            Hier kannst du Kontakten hinzufügen.
         </div>
         <form action='?page=contacts' method='POST'>
            <div>
               <input placeholder='Name eingeben' name='name'>
            </div>
            <div>
               <input placeholder='Telefonnummer eingeben' name='phone'>
            </div>
            <div>
               <button type='submit'>Ansender</button>
            </div>
         </form>
         ";
      };

?>