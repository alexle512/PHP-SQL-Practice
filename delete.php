<?php

    $id=$_GET['id'];
    $conn=mysqli_connect('localhost', 'root','') or die($conn->error);
    //Select Database
    $select_db=mysqli_select_db($conn,'test1') or die($conn->error);
    //SQL Query to Delete firstname and lastname
    $sql="DELETE FROM tbl_users WHERE id=".$id;
    //Execute QUery
    $result=$conn->query($sql) or die($conn->error);
    if($result==true)
    {
        //Redirect to Home Page
        header('location:index.php');
    }
    else
    {
        echo "ERROR";
    }
?>