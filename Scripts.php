<?php

    if (isset($_POST['id', 'score'])) {

        conPOST($_POST['id', 'score']);
        
        
        function conPOST($Id, $Score){
            $servername = "web2.c7mrwyr3et3m.us-west-2.rds.amazonaws.com,1433";
            $username = "JacksonChandler";
            $password = "jackson11";

            // Create connection
            $conn = new mysqli($servername, $username, $password);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            echo "Connected successfully";

            $query = "INSERT INTO HIGH_SCORE_TABLE (Id, Score) VALUES ('PlayerID', 'PlayerScore')"
        }
    }
    
?>