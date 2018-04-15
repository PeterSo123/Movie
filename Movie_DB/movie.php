<html>
    <head>
        <title>TestMovie</title>
    </head>
    <body>
        <?php
            include("connect.php");
            
            $sql = "SELECT MName FROM movie";
            if($stmt = $db->query($sql))
            {
                while($result = mysqli_fetch_object($stmt))
                {
                    echo '<p>Name: '.$result->MName.'</p>';
                }
            }
        ?>
    </body>
</html>