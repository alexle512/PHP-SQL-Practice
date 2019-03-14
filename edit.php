<!DOCTYPE html>
<html>
    <head>
        <title>INSERT UPDATE AND DELETE IN PHP AND MYSQL</title>
    </head>

    <style>
        *{
            margin: 0;
        }
        .header{
            background-color: black;
            color: white;
            padding: 1%;
            text-align: center;
        }
        .main{
            width: 80%;
            border: 1px solid black;
            margin: 1% auto;
            padding: 3%;
        }
        .footer{
            background-color: black;
            color: white;
            padding: 1%;
            text-align: center;
        }

        table, tr, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 1%;
        }
    </style>

    <body>
        <header class="header">
            <h1>INSERT UPDATE AND DELETE</h1>
        </header>

    <div class ="main">
        <h2>Updating First and Last Name</h2>

        <?php
            $id=$_GET['id'];
            //Connect database
            $conn=mysqli_connect('localhost', 'root','') or die($conn->error);
            //Select Database
            $select_db=mysqli_select_db($conn,'test1') or die($conn->error);
            //Query to SELECT DATA
            $sql="SELECT * FROM tbl_users WHERE id=".$id;
            //Executing the Query
            $result=$conn->query($sql) or die($conn->error);
            if($result==true)
            {
                $row=mysqli_fetch_assoc($result);
                $first_name=$row['first_name'];
                $last_name=$row['last_name'];
            }
        
        ?>
        <form method="post" action="edit_action.php">
            <table>
                <tr>
                    <td>First Name: </td>
                    <td><input type="text" name="first_name" placeholder= "<?php echo $first_name; ?>"/></td>
                </tr>

                <tr>
                    <td>Last Name: </td>
                    <td><input type="text" name="last_name" placeholder="<?php echo $last_name; ?>" /></td>
                </tr>
            
                <tr>
                    <td>&nbsp;<input type="hidden" name="id" value="<?php echo $id; ?>" /></td>
                    <td><input type="submit" name="submit" value="Add Member" /></td>
                </tr>
            </table>
        </form>
        <hr />
        <hr />
        <hr />
    </div>

    <footer class="footer">
        All rights reserved. &COPY; 2019 Alex Le

    </footer>
    </body>
</html>