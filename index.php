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
        <h2>Adding First and Last Name</h2>
        <form method="post" action="add_action.php">
        <table>
            <tr>
                <td>First Name: </td>
                <td><input type="text" name="first_name" placeholder="First Name" /></td>
            </tr>

            <tr>
                <td>Last Name: </td>
                <td><input type="text" name="last_name" placeholder="Last Name" /></td>
            </tr>
        
            <tr>
            <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Add Member" /></td>
            </tr>
            </table>
        </form>
        <hr />
        <hr />
        <hr />


        <h2>Listing all the Names</h2>
        <table>
            <tr>
                <th>SN</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Actions</th>
            </tr>

            <?php

                $conn=mysqli_connect('localhost', 'root','') or die($conn->error);
                $select_db=mysqli_select_db($conn,'test1') or die($conn->error);
                $sql="SELECT + FROM tbl_users";
                $result=$conn->query($sql) or die($conn->error);
                $sn=1;
                if($result==true)
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $id=$row['id'];
                        $first_name=$row['first_name'];
                        $last_name=$row['last_name'];
                        ?>
                        <tr>
                            <td><?php echo $sn++; ?>. </td>
                            <td><?php echo $first_name; ?></td>
                            <td><?php echo $last_name; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $id; ?>"><button type="button">UPDATE</button></a>                
                                <a href="delete.php?id=<?php echo $id; ?>"><button type="button">DELETE</button></a>                
                            </td>
                        </tr>
                        <?php
                        }
                    }
                ?>


            </table>
        </div>

        <footer class="footer">
            All rights reserved. &COPY; 2019 Alex Le

        </footer>
    </body>
</html>
