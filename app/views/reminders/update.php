<?php require_once 'app/views/templates/header.php' ?>

<div class="update_reminder">
  <div class="page-header" id="banner">
      <div class="row">
        <div>
           <h1>Update Reminder</h1>
           <form action="/reminders/update" method="post">
             
              <input type="hidden" name="id" value="<?php echo $data['reminder']['id']; ?>">
              <br>
             
              <label for="subject">Subject:</label>
              <input type="text" id="subject" name="subject" value="<?php echo $data['reminder']['subject']; ?>">
              <br><br>
             
             <input type="submit" value="Update Reminder">
             <button type="button" onclick="window.location.href='/reminders'">Cancel</button>
           </form>
           
        </div>
      </div>
    </div>   
  


    <?php require_once 'app/views/templates/footer.php' ?>