<?php
    $db_server = "localhost";
    $db_uname = "root";
    $db_pass = "";
    $db_name = "db_gorent";

    $conn = mysqli_connect($db_server, $db_uname, $db_pass, $db_name);

    echo "<pre>";
    //print_r($conn) ;
    //var_dump($conn);

    if($conn) {
        echo "connected!<br>";

        // insert
        //$query = "INSERT INTO users VALUES ('NULL', 'kamrul@yourmail.com', '123456', 'Kamrul Islam', '01234567891011', 'Male', '11/Sept/2000', 'Student', '01111111111', 'Ullapara', 'Bangladesh');";

        // if(mysqli_query($conn, $query)) {
        //     echo "inserted successfully!";
        // } else {
        //     echo "something went wrong!";
        // }

        // update
        // $query = "UPDATE users SET user_name = 'Tabassum', user_occu = 'Student', user_dob = '6/May/1990' WHERE id = 4;";
        // if(mysqli_query($conn, $query)) {
        //     echo "updated successfully!";
        // } else {
        //     echo "something went wrong!";
        // }

        // delete
        // $query = "DELETE FROM users WHERE id = 9;";
        // if(mysqli_query($conn, $query)) {
        //     echo "deleted successfully!";
        // } else {
        //     echo "something went wrong!";
        // }

        // select 

        $query = "SELECT * FROM users WHERE id = '11' || id = '15';";
        $result = mysqli_query($conn, $query);
        
        echo "<pre>";
        //print_r(mysqli_fetch_assoc($result));
        
       echo "<table border='1'>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            foreach($row as $value) {
                
                echo "<td>$value</td>";
            }
            echo "</tr>";
     
        } 
       echo "</table>";





        // while($row = mysqli_fetch_assoc($result)) {
        //     echo $row['user_email'] . "<br>";
        // }

    }

?>