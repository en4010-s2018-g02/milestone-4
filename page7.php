

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
            
            $query="SELECT * from module3 where znumber=('$_POST[znumber]')";
            
           
           echo "<table border=1>;
        <tr>
        <th>Name</th>
        <th>Znumber</th>
        <th>Class Crn</th>
        <th>College</th>;
        <th>Department</th>;
        <th>Class</th>;
        <th>Classnumber</th>;
        <th>Classname</th>;
        <th>email</th>;
        <th>Flagged</th>;
        </tr>";

            while (($row= mysqli_fetch_assoc($query)) != false){
                echo "<tr>"
                    echo "<td>" {$row['name']}"</td>";
                echo "<td>" {$row['znumber']}"</td>";
                echo "<td>" {$row['class_crn']}"</td>";
                echo "<td>" {$row['college']}"</td>";
                echo "<td>" {$row['department']}"</td>";
                echo "<td>" {$row['class']}"</td>";
                echo "<td>" {$row['classnumber']}"</td>";
                echo "<td>" {$row['classname']}"</td>";
                echo "<td>" {$row['email']}"</td>";
                echo "<td>" {$row['Flagged']}">/td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_close($conn);
            sleep(5);
            header('page7.html');
            exit;
        }
        */
            mysqli_close($conn);
            sleep(5);
            header('location: http://lamp.cse.fau.edu/~CEN4010_S2018g02/module3/index.html');
            exit;
?>

