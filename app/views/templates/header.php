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
        <!-- Added CSS style -->
        <link rel="stylesheet" href="/style.css">
      
        <!-- Added Bootstrap CSS -->  
        <link rel="stylesheet" href="/bootstrap.min.css">     
      
    </head>
    <body>
      <nav class="navbar">
        <div class="container">
          <a class="navbar-brand" href="#">COSC 4806</a>
          <ul>
            <li class="nav-item"><a href="/home">Home</a></li>
            <li class="nav-item"><a href="/reminders">Reminders</a></li>
  
            <!-- Adding reports for admin -->
            <?php if ($_SESSION['username'] == 'Admin') : ?>
              <li class="nav-item"><a href="/reports">Reports</a></li>
            <?php endif;?>
            
            <li class="nav-item">
              <a href="#" class="dropdown-toggle">Dropdown</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <hr>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="/logout">Logout</a></li>
          </ul>
        </div>
      </nav>
  
     <script>
        document.addEventListener('DOMContentLoaded', function(){
          var dropdown = document.querySelector('.dropdown-toggle');
          var menu = dropdown.nextElementSibling;
          menu.style.display = 'none';

          dropdown.addEventListener('click', function(event){
            event.preventDefault();
            menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
          });
        });
      </script>
   