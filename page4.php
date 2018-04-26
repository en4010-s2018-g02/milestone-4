
<?php

    require("db.php");
    // Check connection
    if (!$con) {
    echo 'Not Connected to server';
    }
    if(!mysqli_select_db($con,'CEN4010_S2018g02'))
    {
    echo 'Database not selected';
    }

$labuse=$_POST['labuse'];
$labloc=$_POST['lobloc'];
$znumber=$_POST['znumber'];


$sql = "INSERT INTO lab (lab_type, lab_building, znumber) VALUES ('$labuse','$labloc','$znumber')";

if(!mysqli_query($con,$sql)){
echo 'Not Inserted';
}
else{
echo 'Inserted';
}

header("refresh:2; url=page4.html");
    
?>
