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
        
        <?php
            $serverName = "TIMI"; //serverName\instanceName
            $connectionInfo = array( "Database"=>"OnlineTutor");
            $conn = sqlsrv_connect( $serverName, $connectionInfo);
            
            if( !$conn ) {
                echo "Connection could not be established.<br />";
                die( print_r( sqlsrv_errors(), true));
            }
        ?>

        <html>
            <body>
                <form action="second.php" method="POST">
                    <img src="login.png" alt="login" style="width:100px;height:100px;" class="center">
                    <div> email address: <input type="text" name="email"><br> </div>
                    password: <input type="text" name="password"><br>
                    <input type="submit">
                </form>
            </body>
        </html>
    </div>
</body>

</html>