<?php require_once 'app/views/templates/header.php' ?>

<div class="reports">
  <div class="page-container">
    <div class="page-header" id="banner">
      <div class="row">
        <div>
           <h1>Reports</h1>
            <!-- Using card component of Bootstrap -->
              <!-- To view all the reminders -->
                <div class="card" style="width: 18rem;">
                  <div class="card-header">View All Reminders</div>
                  <div class="card-body">
                    <table>
                      <thead>
                        <tr>
                          <th>Reminder ID</th>
                          <th>UserID</th>
                          <th>Subject</th>
                          <th>Timestamp</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach ($data['reminders'] as $reminder){
                              echo "<tr>";
                              echo "<td>" . $reminder['id'] . "</td>";
                              echo "<td>" . $reminder['user_id'] . "</td>";
                              echo "<td>" . $reminder['subject'] . "</td>";
                              echo "<td>" . $reminder['created_at'] . "</td>";
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
          
        </div>
      </div>
    </div>    
  </div>
</div>
  






<?php require_once 'app/views/templates/footer.php' ?>