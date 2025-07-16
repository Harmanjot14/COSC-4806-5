<?php

  class Reports extends Controller {
  
    public function index() {		
      session_start();
      
      $reminder = $this->model('Reminder');
      $reminders_list = $reminder->get_all_reminders();

      $report = $this->model('Report');
      $most_reminders = $report->get_user_with_most_reminders();
      
      $this->view('reports/index', ['reminders' => $reminders_list, 'mostReminders' => $most_reminders]);
      
    
    }
  }

?>