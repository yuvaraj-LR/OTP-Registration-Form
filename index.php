<?php

    if(isset($_POST[''])) {
        $fname = $_POST['fullname'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $identify = $_POST['identify'];
        $address = $_POST['address'];

        if($fname != '' && $email != '' && $country != '' && $identify != '' && $address != '') {

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "Internshala";

            $conn = mysqli_connect($servername, $username, $password, $database);

            if ($conn -> connect_error) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO users VALUE ($fname, $email, $country, $identify, $address)";

            if ($conn->query($sql) === TRUE) {
                echo "Data Inserted Successfully!!!";
            } else {
                echo "Error: " . $conn->error;
            }
  
            $conn->close();
        }
    }

?>