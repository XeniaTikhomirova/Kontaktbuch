<?php
      if($_GET['page'] == 'contacts') {
         echo "
         <p>Hier sind deine <b>Kontakten</b></p>
         ";
         foreach($contacts as $index => $row) {
            $name = $row['name'];
            $phone = $row['phone'];
            echo "
            <div class='card'>
               <img class='profile-card' src='./img/profile-blank.png'>
               <b>$name</b><br>
               $phone
               <a class='phonebtn' href='tel:$phone'>Anrufe</a>
               <a class='deletebtn' href='index.php?page=delete&delete=$index'>Löschen</a>
            </div> 
            ";
         }
      };
?>