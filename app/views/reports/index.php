<?php require_once 'app/views/templates/header.php' ?>

<div class="reports">
    <div class="page-header" id="banner">
      <h1>Reports</h1>
      <div class="row">
            <!-- Using card component of Bootstrap -->
              <!-- To view all the reminders -->
              <div class="col-md-6">
                <div class="card mb-4">
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
                              echo "</tr>";
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <br><br>

               <!-- who has the most reminders -->
              <div class="col-md-6">
                <div class="card mb-4">
                  <div class="card-header">Who has the most reminders</div>
                  <div class="card-body">
                    <table>
                      <thead>
                        <tr>
                          <th>User ID</th>
                          <th>Number of Reminders</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach ($data['mostReminders'] as $reminder){
                              echo "<tr>";
                              echo "<td>" . $reminder['user_id'] . "</td>";
                              echo "<td>" . $reminder['count'] . "</td>";
                              echo "</tr>";
                            
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
  






<?php require_once 'app/views/templates/footer.php' ?>