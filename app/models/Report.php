<?php 

class Report{

    public function __construct(){

    }
    public function get_user_with_most_reminders(){
        $db = db_connect();
        $statement = $db->prepare("SELECT user_id, COUNT(*) as count FROM reminders GROUP BY user_id ORDER BY count DESC LIMIT 1");
        $statement->execute();
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
}

?>