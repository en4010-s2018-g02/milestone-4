<?php
if(isset($_POST['submit'])){
    $servername="lamp.eng.fau.edu";
    $username="CEN4010_S2018g02";
    $password="cen4010_s2018";
    $db="CEN4010_S2018g02";

    $conn =  mysqli_connect($servername,$username,$password);

    if (mysqli_connect_error()) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    mysqli_select_db($conn,"CEN4010_S2018g02");

    $sql="INSERT INTO module3(name,znumber,class_crn,classname) VALUES ('$_POST[name]','$_POST[znumber]','$_POST[class_crn]','$_POST[classname]')";

    mysqli_query($conn,"INSERT INTO module3(name,znumber,class_crn,classname) VALUES ('$_POST[name]','$_POST[znumber]','$_POST[class_crn]','$_POST[classname]')");
   
    mysqli_close($conn);
    sleep(5);
    header('location: http://lamp.cse.fau.edu/~CEN4010_S2018g02/module3/index.html');
    exit;
  }
?>
