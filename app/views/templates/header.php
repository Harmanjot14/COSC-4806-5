<?php
if (!isset($_SESSION['auth'])) {
    header('Location: /login');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="/favicon.png">
        <title>COSC 4806</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <!--Added Bootsrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
      
        <!-- Added CSS style -->
        <link rel="stylesheet" href="/style.css">     

       
       
    </head>
  
    <body>
      <nav class="css-navbar">
        <div class="css-container">
          <a class="css-navbar-brand" href="#">COSC 4806</a>
          <div class="css-second-line">
          
          <ul>
            <li class="css-nav-item"><a href="/home">Home</a></li>
            <li class="css-nav-item"><a href="/reminders">Reminders</a></li>
  
            <!-- Adding reports for admin -->
            <?php if ($_SESSION['username'] == 'Admin') : ?>
              <li class="css-nav-item"><a href="/reports">Reports</a></li>
            <?php endif;?>
            
            <li class="css-nav-item">
              <a href="#" class="css-dropdown-toggle">Dropdown</a>
                <ul class="css-dropdown-menu">
                  <li><a class="css-dropdown-item" href="#">Action</a></li>
                  <li><a class="css-dropdown-item" href="#">Another action</a></li>
                  <hr>
                  <li><a class="css-dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="css-nav-item"><a href="/logout">Logout</a></li>
          </ul>
            </div>
        </div>
      </nav>
  
     <script>
        document.addEventListener('DOMContentLoaded', function(){
          var dropdown = document.querySelector('.css-dropdown-toggle');
          var menu = dropdown.nextElementSibling;
          menu.style.display = 'none';

          dropdown.addEventListener('click', function(event){
            event.preventDefault();
            menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
          });
        });
      </script>
   