<?php require_once 'app/views/templates/header.php' ?>

<div class="update_reminder">
  <!-- breadcrumb -->  
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item"><a href="/reminders">Reminders</a></li>
      <li class="breadcrumb-item active" aria-current="page">Update</li>
    </ol>
  </nav>

  <div class="page-container">
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
    </div>  
  </div>
  


    <?php require_once 'app/views/templates/footer.php' ?>