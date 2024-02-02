<style>

      body {
         font-family: 'Montserrat', sans-serif;
         background-color: #DCDCDC;
         /*background-image: url('img/background_pattern.jpg');*/
         margin: 0;
      }

      .main {
         display: flex;
      }
      
      .menu {
         width: 20%;
         //background: rgb(238,174,202);
         background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
         margin-right: 30px;
         padding-top: 150px;
         height: 100vh;
      }

      .menu a {
         text-decoration: none;
         color: #FFFFFF;
         padding: 7px;
         display: flex;
         align-items: center;
      }

      .menu a:hover {
         background-color: rgba(255, 255, 255, 0.1);
      }

      .menu img {
         margin-right: 10px;
      }

      .myname {
         display: flex;
         justify-content: center;
         align-items: center;
         margin-right: 10px;
      }

      .my-contact-book {
         margin-bottom: 30px;
      }

      .avatar {
         background-color: #D8BFD8;
         border-radius: 100%;
         padding: 16px;
         height: 30px;
         width: 30px;
         display: flex;
         justify-content: center;
         align-items: center;
         margin-right: 10px;
      }

      .content {
         width: 80%;
         margin-top: 120px;
         margin-right: 32px;
         //background-color: white;
         background: rgb(238,174,202);
         background: rgb(238,174,202);
         background: linear-gradient(256deg, rgba(238,174,202,1) 1%, rgba(11,2,2,0) 70%);
         padding: 10px;
         border-radius: 5px;
         box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
      }

      .menubar {
         background-color: white;
         position: absolute;
         right: 0;
         left: 0;
         top: 0;
         height: 100px;
         box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.1);
         padding-left: 30px;
         display: flex;
         justify-content: space-between;
      }

      .card {
         background-color: rgba(0,0,0,0.05);
         margin-bottom: 16px;
         border-radius: 5px;
         position: relative;
         padding: 8px;
         padding-left: 65px;
         max-width: 50%;
      }

      .profile-card {
         width: 48px;
         height: 48px;
         border-radius: 50%;
         border: 1px solid white;
         position: absolute;
         left: 8px;
         bottom: 2px;
      }

      .phonebtn {
         position: absolute;
         right: 0px;
         top: 0px;
         border-radius: 5px;
         background-color: #D8BFD8;
         color: white;
         padding: 2px;
         text-decoration: none;
      }

      .phonebtn:hover {
         background-color: #EFE5EF;
      }

      .deletebtn {
         position: absolute;
         right: 0px;
         top: 30px;
         border-radius: 5px;
         border: 1px solid white;
         background-color: #FF9797;
         color: white;
         padding: 2px;
         text-decoration: none;
      }

      .deletebtn:hover {
         background-color: #EFE5EF;
      }

      .form_submit {
         display: block;
      }

      .footer {
         padding: 10px;
         text-align: center;
         background: rgb(238,174,202);
         background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
         color: white;
         margin-top: 50px;
      }

      .contribiton-list {
         margin-top: 3%;
         text-decoration: none;
      }

      .contribitons {
         text-decoration: none;
         color: white;
      }

   </style>