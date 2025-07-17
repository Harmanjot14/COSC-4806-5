<?php

  class Reports extends Controller {
  
    public function index() {		
      session_start();
      
      $report = $this->model('Report');
      $reminders_list = $report->get_all_reminders_with_username();

      $most_reminders = $report->get_user_with_most_reminders();

      $username = $_SESSION['username'] ?? null;
      $total_logins = $username ? $report->get_total_logins_by_username($username):0;
      
      $this->view('reports/index', ['reminders' => $reminders_list, 'mostReminders' => $most_reminders, 'totalLogins' => $total_logins]);
      
    }
  }

?>