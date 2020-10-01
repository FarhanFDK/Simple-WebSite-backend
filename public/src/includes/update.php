<?php
    if(isset($_POST['submit'])){
        $host_name = 'localhost';
        $user_name = 'root';
        $user_pass = '';
        $db_name = 'ajax';
        $connection = new MySQLi($host_name , $user_name , $user_pass , $db_name);
        $username = $_POST['usernamePHP'];
        $lastname = $_POST['lastnamePHP'];
        $username = $connection->real_escape_string($username);
        $lastname = $connection->real_escape_string($lastname);
        $query = "INSERT INTO users VALUES('$username' , '$lastname')";
        $result = $connection->query($query);
        if($result){
            exit("<center>SUCCESS</center>");
        }else{
            exit("FAILED!");
        }
    }
?>