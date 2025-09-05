<?php
    if(!isset($_SESSION))
        session_start();
    
    include'../dbo/connection.php';

    if(isset($_POST["login"])) //submit
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "select * from admin where username='$username' and password = '$password'";
        $stmt = $conn->query($sql);
        $row = $stmt->rowCount();
        $fetch = $stmt->fetch();

        if($row>0)
        {
            $_SESSION["id"]= $fetch["id"];
            $_SESSION["username"]= $fetch["username"];

                echo "<script>
                alert('Congratulation!');
                alert(' Login Successful!!!');
                   location.href='admindashboard.php';
                    </script>";
        }
        else
        {
            echo "<script>
                    alert('Invaild User');
                </Script>";

            echo "<script>
                    location.href = 'adminloginform.php';
                </script>";
        }
    }
?>