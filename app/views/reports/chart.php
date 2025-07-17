<?php require_once 'app/views/templates/header.php' ?>

<!-- Include Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="charts">
    <!-- breadcrumb -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/reports">Reports</a></li>
        <li class="breadcrumb-item active" aria-current="page">Charts</li>
      </ol>
    </nav>
  
    <div class="container">
      <div class="page-header" id="banner">
        <h1>Charts</h1>
        <br>
        
        <!--First Chart-->
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4">
              <div class="card-header">Number of Reminders per User</div>
              <div class="card-body">
                <div class="chart-container">
                <!-- Chart.js bar chart -->
                <canvas id="myChart"></canvas>

                <!-- Chart.js script -->
                <script>
                  const ctx = document.getElementById('myChart');
                  const myChart = new Chart(ctx, {
                      // Set the chart type to bar
                      type: 'bar',

                      // Set the data for the chart
                      data: {
                          labels: [<?php foreach ($data['reminders'] as $reminder) { echo "'" . $reminder['user_id'] . "',"; } ?>],
                          
                          datasets: [{
                              label: 'Number of Reminders',
                              data: [<?php foreach ($data['reminders'] as $reminder) { echo $reminder['count'] . ","; } ?>],   
                              backgroundColor: 'rgba(128, 128, 128, 0.4)',
                              borderColor: 'rgba(128, 128, 128, 1)',
                              borderWidth: 1                            
                          }]  
                      },

                     // Set the options for the chart
                      options: {
                          scales: {
                              y: {
                                  beginAtZero: true
                              }
                          },
                          plugins:{
                              legend:{
                                  display: true
                              },
                              title:{
                                  display: true,
                                  text: 'Number of Reminders per User'
                              }
                          }
                      }
                  });
                </script>
                </div>
              </div>
            </div>
          </div>
        </div>      
      <br><br><br>

      <!--Second Chart-->
      <div class="row">
        <div class="col-md-6">
          <div class="card mb-4">
            <div class="card-header">Login Attempts per User</div>
            <div class="card-body">
              <div class="chart-container">
                <!-- Chart.js bar chart -->
                <canvas id="myChart2"></canvas>
                <!-- Chart.js script -->
                <script>
                  const ctx2 = document.getElementById('myChart2');
                  const myChart2 = new Chart(ctx2, {
                      // Set the chart type to bar
                      type: 'bar',
                    
                      // Set the data for the chart
                      data: {
                          labels: [<?php foreach ($data['login_attempts'] as $login_attempt) { echo "'" . $login_attempt['username'] . "',"; } ?>],
                        
                          datasets: [{
                              label: 'Good Attempts',
                              data: [<?php foreach ($data['login_attempts'] as $login_attempt) { echo $login_attempt['good_attempts'] . ","; } ?>],
                              backgroundColor: 'rgba(0, 128, 0, 0.4)',
                              borderColor: 'rgba(0, 128, 0, 1)',
                              borderWidth: 1
                          },
                          {
                              label: 'Bad Attempts',
                              data: [<?php foreach ($data['login_attempts'] as $login_attempt) { echo $login_attempt['bad_attempts'] . ","; }?>],    
                              backgroundColor: 'rgba(255, 0, 0, 0.4)',
                              borderColor: 'rgba(255, 0, 0, 1)',
                              borderWidth: 1
                          }]
                      },

                     // Set the options for the chart
                      options: {
                          scales: {
                              y: {
                                  beginAtZero: true
                              }
                          },
                          plugins: {
                              legend:{
                                  display: true
                              },
                              title: {
                                  display: true,
                                  text: 'Login Attempts per User'  
                              }
                          }
                      }
                  });
                  </script>
                </div>
              </div>
            </div>
          </div>
        </div>
                    
                    
      </div>            
    </div>  
</div>


<?php require_once 'app/views/templates/footer.php' ?>