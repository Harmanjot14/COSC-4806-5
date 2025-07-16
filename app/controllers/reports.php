<?php

  class Reports extends Controller {
  
    public function index() {		
      session_start();
      if (!isset($_SESSION['auth']) || $_SESSION['auth']['username'] !== 'admin') {
        header('Location: /login');
        exit;
      }
      $this->view('reports/index');
    
    }
  }

?>