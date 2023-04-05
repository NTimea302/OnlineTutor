<!DOCTYPE html>
<html lang="en">

<head>
    <title>OnlineTutor</title>
    <meta charset="utf-8">
    <link rel="stylesheet"  href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <img src="logo.png" alt="logo picture" style="width:220px;height:80px;">
</head>

<body>
    <h1> Welcome to OnlineTutor!  </h1>
    <div class="container-fluid p-3">
        <! L O G I N   T O   S E R V E R>
        <?php
            $serverName = "TIMI"; //serverName\instanceName
            $connectionInfo = array( "Database"=>"OnlineTutor");
            $conn = sqlsrv_connect( $serverName, $connectionInfo);
            
            if( !$conn ) {
                echo "Connection could not be established.<br />";
                die( print_r( sqlsrv_errors(), true));
            }
        ?>

        <form>
             <div> You have entered an incorrect password or email</div>
             <button formaction="index.php">Try again</button>
        </form>
        
        <! L O G I N  C O D E>
        <?php

            if(isset($_POST['email'])){
    
                $email = $_POST['email'];
                $password = $_POST['password'];
                $email = stripcslashes($email);
                $password = stripcslashes($password);
                $sql = "select * from Students where email = '".$email."' and password = '".$password."'";
                $result = sqlsrv_query( $conn, $sql);
                $row = sqlsrv_fetch_array($result);
                //echo "Result: ". $result . "<br>". "Row0: " . $row[0] . "<br>". "Row1: " . $row[1] . "<br>". "Row2: " . $row[2] . "<br>". "Row3: " . $row[3] . "<br>";
                //echo "Row_email: " . $row['email'] . "<br>". "Row_pass: " . $row['password'] . "<br>";

                if($row != 0 ){
                //if($row['email'] == $email && $row['password'] == $password){
                    echo " You Have Successfully Logged in";
                    header('Location: About.php');
                    exit();
                }
                else{
                    //echo " You Have Entered Incorrect Password";
                    //header('Location: second.php');
                    //sleep(5);
                    //header('Location: first.php');
                    ///<form method="POST" action="first.php">
                    exit();
                }
                    
            }
        ?>
       


    </div>
</body>

</html>