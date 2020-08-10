<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>SIMPLE DATABASE CONNECTION</title>
    <style></style>
</head>
<body>
    <?php
        $host = 'localhost';
        $user_name = 'root';
        $user_password = '';
        $database_name = '';
        $connection = mysqli_connect($host, $user_name, $user_password, $database_name);
        if(!$connection){
            die("Failed to connect!");
        }
        $query = "INSERT INTO table(id,username,password,phonenumber)";
        $query .= "VALUES('$id','$username','$password','$phonenumber')";
        $result = mysqli_query($connection,$query);
    ?>
</body>
</html>