<?php
    function conGET(){
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
            
            //bind to $name
        if ($stmt = $mysqli->prepare("SELECT * FROM HIGH_SCORE_TABLE ORDER BY Score")) {
            $stmt->bind_result($name);
            $OK = $stmt->execute();
        }
        //put all of the resulting names into a PHP array
        $result_array = Array();
        while($stmt->fetch()) {
            $result_array[] = $name;
        }
        //convert the PHP array into JSON format, so it works with javascript
        $json_array = json_encode($result_array);
        }
?>