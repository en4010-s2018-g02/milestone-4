<?php
require('db.php');
//test connection
if (!$con) {
    echo 'Not Connected to server';
}
if(!mysqli_select_db($con,'CEN4010_S2018g02'))
{
    echo 'Database not selected';
}

$add_admin=$_POST['admin'];
$delete_admin=$_POST['delete_admin'];
$add_class=$_POST['add_class'];
$delete_class=$_POST['delete_class'];
$add_ta=$_POST['add_ta'];
$delete_ta=$_POST['delete_ta'];
$add_student=$_POST['add_student'];
$delete_student=$_POST['delete_student'];

if(isset($_POST['submit'])){
    $sql = "INSERT INTO superAdmin (lastname) VALUES ('$add_admin')";
    if(!mysqli_query($con,$sql)){
        echo 'Not Inserted';
    }
    else{
        echo 'Inserted';
    }
    header('location: page2.html');
}
if(isset($_POST['delete_admin'])){
$sql = "DELETE * From superAdmin WHERE lastname=$delete_admin";
    if(!mysqli_query($con,$sql)){
        echo 'Not Inserted';
    }
    else{
        echo 'Inserted';
    }
    header('location: page2.html');
}

?>