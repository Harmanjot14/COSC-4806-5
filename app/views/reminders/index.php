<?php require_once 'app/views/templates/header.php' ?>


<div class="reminder_container">
  <div class="page-header" id="banner">
      <div class="row">
        <div>
           <h1>Reminders</h1>
           <a href = "/reminders/create"><button>Add Reminder</button></a>
           <br><br>
           <form action="/reminders/update" method="get" style="display: inline; margin-left: 8 px;">
             <select name="id" required>
               <option value="">Select Reminder ID..</option>
               <?php foreach ($data['reminders'] as $reminder): ?>
                 <option value="<?= $reminder['id'] ?>">ID: <?= $reminder['id'] ?></option>
               <?php endforeach; ?>
             </select>
             <button type="submit">Update Reminder</button>
           </form>

           <br><br>
        </div>
      </div>
      <table>
        <thead>
          <tr>
            <th> Reminder ID</th>
            <th> Subject</th>
            <th> Timestamp</th>
            <th> Actions</th>
          </tr>
        </thead>  
        <tbody>
          <?php
            foreach ($data['reminders'] as $reminder){
                echo "<tr>";
                echo "<td>" . $reminder['id'] . "</td>";
                echo "<td>" . $reminder['subject'] . "</td>";
                echo "<td>" . $reminder['created_at'] . "</td>";
                echo "<td>". "<a href='/reminders/delete?id=" . $reminder['id'] . "'><button>Delete</button></a>" ." ";
                if(!$reminder['completed']){
                  echo "<a href='/reminders/completed?id=" . $reminder['id'] . "'><button>Completed</button></a>" ." ";
                }
                else{
                  echo "<button disabled>Completed</button>" ." ";
                  echo $reminder['created_at'] ." ";
                }
                echo "</td>";
            }
          ?>
        </tbody>
      </table>   
      <br><br>
  </div>


  
  <!-- Error messages -->
    <?php if(isset($_SESSION['error'])): ?>
      <div style="color: red; font-size: 20px; font-weight: bold;">
        <?= $_SESSION['error'] ?>
      </div>
      <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

  <!-- Success messages -->
  <?php if(isset($_SESSION['success'])): ?>
    <div style="color: green; font-size: 20px; font-weight: bold;">
      <?= $_SESSION['success'] ?>
    </div>
    <?php unset($_SESSION['success']); ?>
  <?php endif; ?>

  </div>

  <?php require_once 'app/views/templates/footer.php' ?>
    