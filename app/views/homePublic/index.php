<?php require_once 'app/views/templates/headerPublic.php' ?>

<div class="home">
    <div class="page-container">
        <div class="page-header" id="banner">
            <div class="row">
                <div>
                    <h1>Welcome!</h1>
                    <ul class="public-list">
                        <li>Plan your daily tasks with the help of our reminder app</li>
                        <br>
                        <li>To track your task progress you can use buttons: 
                            <ul class="sub-list">
                                <li><strong>Add button:</strong> to add a new task</li>
                                <li><strong>Update button:</strong> to edit an existing task</li>
                                <li><strong>Delete button:</strong> to delete an existing task</li>
                                <li><strong>Complete button:</strong> to mark a task as completed</li>
                            </ul>
                        </li>
                        <br>
                        <li>If you are already a user, Please login to your account to start using our app</li><br>
                        <li>If you are a new user, Please sign up to create an account to start using our app</li>
                    </ul>
                    <br><br><br>
                    
                    <p class="lead"><strong><?= date("F jS, Y"); ?></strong> </p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once 'app/views/templates/footer.php' ?>