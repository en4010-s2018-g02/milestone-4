<?php
if(isset($_POST['submit'])){
    $servername="lamp.cse.fau.edu";
    $username="CEN4010_S2018g02";
    $password="cen4010_s2018";
    $db="CEN4010_S2018g02";

    $conn =  mysqli_connect($servername,$username,$password);

    if (mysqli_connect_error()) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    mysqli_select_db($conn,"CEN4010_S2018g02");

    $sql="INSERT INTO module3(znumber,classname) VALUES ('$_REQUEST[znumber]','$_REQUEST[classname]')";

    mysqli_query($conn,"INSERT INTO module3(znumber,classname) VALUES ('$_REQUEST[znumber]','$_REQUEST[classname]')");

    mysqli_close($conn);
    sleep(5);
    header('location: http://lamp.cse.fau.edu/~CEN4010_S2018g02/module3/index.html');
    exit;
}
?>
