
<!DOC html>
<html>

    <style type="text/css">

        .countdown{
            position: absolute;
            top:15%;
            left: 70%;
            margin-top: 180px;
            transform: translateX(-45%) translateY(50%);
            color: skyblue;
            font-size: 20px;
            background-color: black;
            padding: 5px 5px 5px 5px;
        }
        .flex-container {
            flex-direction: row;
            justify-content: space-around;
            align-content: center;
            width: 400px;
            height: 700px;
            margin:auto;
            left: 25%;
            background-color: lightgrey;
            text-align: center;


        }
        .col-s{
            top: 10%;
            left:15%;
            margin-top: 100px;
        }
        .col-sm{
            top:10%;
            left:35%;
            margin-top: 100px;
        }
        .row{
            bottom:25%;
        }
        footer {color:black;}
        .remainingTime{
            font-size: 30px;
        }
        text-shadow: -1px 0 black,0 1px black,1px 0 black,0 -1px black;}

    </style>

    <body>


        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <ul class="nav nav-pills  navbar-expand-sm bg-white" >
            <li class="nav-item">
                <a class="nav-link " href="#" style="color: black">Student</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#" style="color: black">Teacher</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#" style="color: black">Class Labs</a>
            </li>

        </ul>
        <div class="row" style="justify-content: space-around" >
            <div class="d-none d-lg-block">
                <img src="EWresized_resized.jpg" alt="EW" style= "float:left visible-lg;width: 489px;height: 100%;" >
            </div>
            <div class="flex-container">


                <div class="col-sm">
                    <a href="#">
                        <span class="glyphicon glyphicon-plus" style="font-size: 30px;color:black;"></span>
                    </a>
                    <footer> Add more time</footer> 
                </div>
                <div class="col-sm">
                    <a href="#">
                        <span class="glyphicon glyphicon-plus" style="font-size: 30px; color:black;"></span>

                    </a>
                    <footer> End Session</footer>
                </div>
                <div class="col-s">
                    <script type="text/javascript">
                        function countDown(secs,elem) {
                            var element = document.getElementById(elem);
                            element.innerHTML = "Remaining Time: "+secs+"seconds";
                            if(secs<1){
                                clearTimeout(timer);
                                element.innerHTML = '<h2>Countdown Complete!</h2>';

                            }
                            secs--;
                            var timer = setTimeout('countDown('+secs+',"'+elem+'")',1000);


                        }

                    </script>

                    <div id="status" class="countdown"></div>
                    <script type="text/javascript">countDown(1200,"status");</script>
                </div>





            </div>

            <div class="d-none d-lg-block">
                <img src="EEresized_resized.jpg" alt="EE" style="float: right;hidden-sm;width: 489px;height: 100%;">
            </div>
        </div>

    </body>
</html>

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

