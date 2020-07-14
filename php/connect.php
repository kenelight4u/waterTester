<?php
    
    $email = filter_input(INPUT_POST, 'email');
    
    if(!empty($email)){
        
               
        $host = "l7cup2om0gngra77.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $dbusername = "mz5a9k7kizkj0eou";
        $dbpassword = "wzl73a4abiiszra3";
        $dbname = "y4ce91ybk03pet4k";

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
