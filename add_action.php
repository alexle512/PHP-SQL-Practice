<?php
    //echo "Add action Page";
    //Get Values from UI
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    //Connecct database
    $conn=mysqli_connect('localhost', 'root','') or die($conn->error);
    //Select Database
    $select_db=mysqli_select_db($conn,'test1') or die($conn->error);
    //SQL query to insert data in table
    $sql="INERT INTO tbl_users SET first_name='$first_name',
                                   last_name='$last_name'";
    
    //Execute Query
    $result=$conn->query($sql) or die($conn->error);
    if($result==true)
    {
        //Query Successful
        echo "Success";
    }
    else{
        echo "Failed";
    } 
?>