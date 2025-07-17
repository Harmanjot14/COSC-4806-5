<?php 

class Report{

    public function __construct(){

    }
    // get all reminders with username using join
    public function get_all_reminders_with_username(){
        $db = db_connect();
        $statement = $db->prepare("SELECT reminders.id, reminders.user_id, users.username, reminders.subject, reminders.created_at FROM reminders JOIN users ON reminders.user_id = users.id");
        $statement->execute();
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    
    //to get the user with the most reminders
    public function get_user_with_most_reminders(){
        $db = db_connect();
        $statement = $db->prepare("SELECT user_id, COUNT(*) as count FROM reminders GROUP BY user_id ORDER BY count DESC LIMIT 1");
        $statement->execute();
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

    //to get how many total logins by username
    public function get_total_logins_by_username($username){
        $db = db_connect();
        $statement = $db->prepare("SELECT COUNT(*) as count FROM login_attempts WHERE username = :username");
        $statement->bindParam(':username', $username);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        return $row['count'];
    }

    
}

?>