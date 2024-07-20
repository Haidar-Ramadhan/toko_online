<?php
require "session.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home    </title>
</head>
<body>
    <h2>Halo <?php echo $_SESSION['username']?></h2>


    <form action="" method="post" >

                <div>
                            <button class="btn btn-success form-control mt-3" type="submit"
                    name="logout">Logout</button>
                </div>
    </form>
 




    <?php
       $tepung = "logout" == false;
            if(isset($_POST['logout'])){
           
                header('location: login.php');
            }
             
        
            ?>


</body>
</html>