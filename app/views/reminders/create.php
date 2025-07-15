<?php require_once 'app/views/templates/header.php' ?>

<div class="create_reminder">
  <div class="page-header" id="banner">
      <div class="row">
        <div>
           <h1>Create Reminder</h1>
           <form action="/reminders/create" method="post">
              <label for="subject">Subject:</label>
              <input type="text" id="subject" name="subject">
              <br><br>
              <input type="submit" value="Submit">
           </form>
           <br><br>
           <a href = "/reminders"><button>Go Back</button></a>
        </div>
      </div>
    </div>    
    
  
    <?php require_once 'app/views/templates/footer.php' ?>