<?php

include("db.php")
    if (isset($_POST["save_task"])){
        $title = $_POST['title'];
        $description= $_POST['description'];
        echo $title;
        echo $description;
        $squery = "INSERT INTO task (title, description) VALUES ($title, $description)";    
    }

?>