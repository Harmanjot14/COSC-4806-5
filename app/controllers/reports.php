<?php

  class Reports extends Controller {
  
    public function index() {		
      session_start();
      
      $report = $this->model('Report');
      $reminders_list = $report->get_all_reminders_with_username();

      $most_reminders = $report->get_user_with_most_reminders();
      $total_logins = $report->get_total_logins_by_username();
      
      $this->view('reports/index', ['reminders' => $reminders_list, 'mostReminders' => $most_reminders, 'totalLogins' => $total_logins]);
      
    }

    public function chart(){
      session_start();
      $report = $this->model('Report');
      $chart_data = $report->get_number_of_reminders_per_user();
      $login_data = $report->get_login_attempts_per_user();
      $this->view('reports/chart', ['reminders' => $chart_data, 'login_attempts' => $login_data]);      
    }
  }

?>