<?php
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

   <!--<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
   <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>-->
   
   <?php
   include "styles.php";
   ?>
</head>

<body>

   <div class="menubar">
      <h1>My Contact Book</h1>
      <div class="myname">
         <div class="avatar">KT</div>Kseniia Tikhomirova
      </div>
   </div>

<div class="main">

   <div class="menu">
      <a href="index.php?page=start"> <img src = "img/menu.svg">Start</a>
      <a href="index.php?page=contacts"> <img src = "img/contact.svg">Kontakten</a>
      <a href="index.php?page=addcontacts"> <img src = "img/contact.svg">Kontakten hinzufügen</a>
      <a href="index.php?page=legal"> <img src = "img/legal.svg">Impressum</a>
   </div>

   <div class="content">

      <?php
      $headline = 'Herzlich willkommen!';
      $contacts = [];
      $deletedcontacts =[];

      if(file_exists('contacts.txt')) {
         $text = file_get_contents('contacts.txt', true);
         $contacts = json_decode($text, true);
      }

      if(isset($_POST['name']) && isset($_POST['phone'])) {
         echo 'Kontakt <b>'. $_POST['name'] .'</b> wurde hinzugefügt';

         $newContact = [
            'name' => $_POST['name'],
            'phone' => $_POST['phone']
         ];
         
         array_push($contacts, $newContact);
         file_put_contents('contacts.txt', json_encode($contacts, JSON_PRETTY_PRINT));
      }

      include 'headings.php';

      //Content for each page
      if($_GET['page'] == 'delete') {
         echo '<p>Dein Kontakt wurde gelöscht</p>';
         $index = $_GET['delete'];
         unset($contacts[$index]);
         file_put_contents('contacts.txt', json_encode(array_values($contacts), JSON_PRETTY_PRINT));
      };

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

<div class="footer">
   (C) My Contact Book 2024 

</div>

</body>
</html>