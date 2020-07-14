<?php
    
    $email = filter_input(INPUT_POST, 'email');
    
    if(!empty($email)){
        
               
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "youtube";

        // Create Connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()) {
            die('Connect Error ('.mysqli_connect_errno() .') '
                . mysqli_connect_error());
        }else {
            $sql = "INSERT INTO capture (email)
            values ('$email' )";

            if ($conn->query($sql)) {
                echo "Thanks for Subscribing, we'll get in touch Soon";
            }
            else {
                echo "Error: " . $sql ."<br>".$conn->error;
            }
            $conn->close();

            header("refresh: 2; url=../index.html ");
        }         

           
    }else{
        echo "Email should not be empty";
        die();

    }


?>
