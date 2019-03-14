<?php
    $id=$_POST['id'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];

    //Connect Database
    $conn=mysqli_connect('localhost', 'root','') or die($conn->error);
    //Select Database
    $select_db=mysqli_select_db($conn,'test1') or die($conn->error);
    //SQL Query to UPDATE DATA
    $sql="UPDATE tbl_users SET first_name='$first_name'
                                last_name='$last_name'
                                WHERE id ='$id' ";
    //Execute Query
    $result=$conn->query($sql) or die($conn->error);
    if($result==true)
    {
        //Redirect to Home Page
        header('location:index.php');
    }
    else
    {
        echo "Error";
    }

?>