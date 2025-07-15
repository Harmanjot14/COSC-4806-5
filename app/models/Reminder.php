<?php 

class Reminder{

    public function __construct(){
      
    }
  
    public function get_all_reminders(){
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM reminders");
        $statement->execute();
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $row;      
    }

    /*function for get the reminder by id*/
    public function get_reminder_by_id($reminder_id){
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM reminders WHERE id = ?");
        $statement->execute([$reminder_id]);
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    
    /*function for update the reminder*/
    public function update_reminder($reminder_id, $new_subject){
        $db = db_connect();
        $statement = $db->prepare("UPDATE reminders SET subject = ?, created_at = NOW() WHERE id = ?");
        $statement->execute([$new_subject, $reminder_id]);      
    }
    
    /*function for create the reminder*/
    public function create_reminder($user_id, $subject){
        $db = db_connect();
        $statement = $db->prepare("INSERT INTO reminders (user_id, subject) VALUES (?, ?)");
        $statement->execute([$user_id, $subject]);

    }

    /*function for delete the reminder*/
    public function delete_reminder($reminder_id){
        $db = db_connect();
        $statement = $db->prepare("DELETE FROM reminders WHERE id = ?");
        $statement->execute([$reminder_id]);
    }

    /*function for completed reminder*/
    public function completed_reminder($reminder_id){
        $db = db_connect();
        $statement = $db->prepare("UPDATE reminders SET completed = 1 WHERE id = ?");
        $statement->execute([$reminder_id]);
    }
    
}
?>