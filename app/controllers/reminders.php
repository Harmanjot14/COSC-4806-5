<?php

class Reminders extends Controller {

    public function index() {		
      $reminder = $this->model('Reminder');
      $reminders_list = $reminder->get_all_reminders();
      $this->view('reminders/index', ['reminders' => $reminders_list]);
    
    }

    //create reminder
    public function create(){
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user_id = $_SESSION['user_id'] ?? null;
        $subject = $_POST['subject'] ?? null;;
        
        if($user_id && $subject){
          $reminder = $this->model('Reminder');
          $reminder->create_reminder($user_id, $subject);
          $_SESSION['success'] = "Reminder created successfully";
          header('Location: /reminders');
          exit;
        }
        else{
          $_SESSION['error'] = "Missing subject";
          header('Location: /reminders/create');
          exit;
        }
      }
      else{
        $this->view('reminders/create');
      }
    }

    //update reminder
    public function update(){
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $reminder_id = $_POST['id'];
        $new_subject = $_POST['subject'];
        $reminder = $this->model('Reminder');
        $reminder->update_reminder($reminder_id, $new_subject);
        $_SESSION['success'] = "Reminder updated successfully";
        header('Location: /reminders');
        exit;
      }
      else{
        $reminder_id = $_GET['id'];
        $reminder = $this->model('Reminder');
        $reminder_data = $reminder->get_reminder_by_id($reminder_id);
        $this->view('reminders/update', ['reminder' => $reminder_data]);
      }
    }

    //delete reminder
    public function delete(){
      $reminder_id = $_GET['id'];
      $reminder = $this->model('Reminder');
      $reminder->delete_reminder($reminder_id);
      $_SESSION['success'] = "Reminder Deleted";
      header('Location: /reminders');
      exit;
    }

   //completed reminder
    public function completed(){
      $reminder_id = $_GET['id'];
      $reminder = $this->model('Reminder');
      $reminder->completed_reminder($reminder_id);
      $_SESSION['success'] = "Reminder Completed";
      header('Location: /reminders');
      exit;
    }

    
  
   


  
}