<?php
// Chicking errors
error_reporting(E_ALL);
ini_set("display_errors", "On");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kontaktbuch</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

   // for textfild from Material Designs Lite ...
   <!--<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
   <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>-->
   
   // My styles
   <?php include "styles.php";?>
</head>

<body>
   <?php include 'menu_bar.php';?>

<div class="main">
   <?php include 'menu.php';?>

   <div class="content">

      <?php
      $headline = 'Herzlich willkommen!';
      $contacts = [];
      $deletedcontacts =[];

      // To prevent deleting previous data:
      if (file_exists('contacts.txt')) {
         // Save previously added content as text in $text, that we convert into table:
         $text = file_get_contents('contacts.txt', true);
         $contacts = json_decode($text, true);
      }

      include 'push_contacts.php';
      include 'headings.php';
      include 'delete_contact.php';

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

      if ($_GET['page'] == 'legal') {
         echo "
         Hier kannst du rechtliche Informationen finden.
         ";
      };

      // Form for inputs
      include 'add_contact_form.php';

      if($_GET['page']== 'start') {
         echo '<p>Hier ist die start Seite.</p>';
      }
      ?>
   </div>
</div>
      <?php include 'footer.php';?>

</body>
</html>