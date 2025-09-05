<?php
 include '../dbo/connection.php';

 $sql = "select * from customer";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer Information</title>
</head>
<style>
     body
     {
            background-image: url('../image/background/background.jpg');
    }

   #customer-tbl 
   {
            width:100%;
            text-align: center;


    }
    
        a {
            text-decoration: none;
        }

        #edit {
            padding-top:0.01rem;
            padding-bottom:0.01rem;
            padding-left:1rem;
            padding-right:1rem;
            background-color: black;
            color:white;
            border: none;
            border-radius: 50px;
        }

        #edit:hover {
            background-color: white;
            color:black;
            border: none;
            border-radius: 50px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        #delete {
            padding-top:0.01rem;
            padding-bottom:0.01rem;
            padding-left:1rem;
            padding-right:1rem;
            background-color: black;
            color:white;
            border: none;
            border-radius: 50px;
        }

        #delete:hover {
            background-color: white;
            color:black;
            border: none;
            border-radius: 50px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .gotodashboard 
        {
            padding-top:0.5rem;
            padding-bottom:0.5rem;
            padding-left:1rem;
            padding-right:1rem;
            background-color: black;
            color:white;
            border: none;
            border-radius: 50px;
        }

        .gotodashboard:hover {
            background-color: white;
            color:black;
            border: none;
            border-radius: 50px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 2px solid black;
        }

        
</style>
<body>
    <div><h1>Customer Information</h1></div>

    <table class="table table-stripped" id="customer-tbl">
        <tr>
            <th>No.</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Action</th>
        </tr>
<?php
$serial = 1;
 foreach($conn->query($sql)as $key => $row)
 {
?>
        <tr>
            <td><?php echo ++$key;?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['password'];?></td>
            <td><?php echo $row['address'];?></td>
            <td><?php echo $row['phoneno'];?></td>
          
            <td>
                <a class="btn btn-primary" href="" id="edit">Edit</a>
                <a class="btn btn-primary" href="" id="delete">Delete</a>
                
            </td>
        </tr>
        <?php
 }
        ?>

    </table>
<br>
<br>
<br>

    <a href="admindashboard.php" class="gotodashboard">Go back to dashboard</a>
</body>
</html>