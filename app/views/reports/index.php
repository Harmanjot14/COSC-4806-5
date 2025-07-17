<?php require_once 'app/views/templates/header.php' ?>

<div class="reports">
    <!-- breadcrumb -->  
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Reports</li>
      </ol>
    </nav>
 
    <div class="page-header" id="banner">
      <h1>Reports</h1>
      <br>
      <a href = "/reports/chart"><button>View Charts</button></a>
      <br><br>
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
                          <th>Username</th>
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
                              echo "<td>" . $reminder['username'] . "</td>";
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
                <br><br>
                 <!-- how many total logins by username -->
                <div class="col-md-6">
                  <div class="card mb-4">
                    <div class="card-header">How many total logins by username</div>
                    <div class="card-body">
                      <table>
                        <thead>
                          <tr>
                            <th>Username</th>
                            <th>Number of Logins</th>
                            <th>Good Attempts</th>
                            <th>Bad Attempts</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <?php
                              foreach ($data['totalLogins'] as $login){
                                  echo "<tr>";
                                  echo "<td>" . $login['username'] . "</td>";
                                  echo "<td>" . $login['count'] . "</td>";
                                  echo "<td>" . $login['good_attempts'] . "</td>";
                                  echo "<td>" . $login['bad_attempts'] . "</td>";
                                  echo "</tr>";
                              }
                            ?>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
          
      </div> 
  </div>
</div>
  

<?php require_once 'app/views/templates/footer.php' ?>