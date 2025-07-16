<?php

  class Reports extends Controller {
  
    public function index() {		
      session_start();
      $reminder = $this->model('Reminder');
      $reminders_list = $reminder->get_all_reminders();
      $this->view('reports/index', ['reminders' => $reminders_list]);
    
    }
  }

?>