<?php

include("db.php");
    if (isset($_POST["save_task"])){
        $title = $_POST['title'];
        $description= $_POST['description'];
        echo $title;
        echo $description;
        $query = "INSERT INTO task (title, description) VALUES ($title, $description)";
        mysqli_query($conn, $query);

        if ($result){
            die("Query Failed");
        }
        echo "saved";
    }

?>