

<?php        
       include ('page4.php');
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
            $sql="SELECT * from module3 where znumber=('$_POST[znumber]')";
            $result=mysqli_query($sql);
    ?>
           
            
<!DOC html>
<html>
    <style type="text/css">

        .countdown{
            position: absolute;
            top:-20%;
            left: 48%;
            margin-top: 180px;
            transform: translateX(-45%) translateY(50%);
            color: skyblue;
            font-size: 20px;
            background-color: black;
            padding: 5px 5px 5px 5px;
        }
        img{
            width: 33%;
            height: 100%;
            object-fit:cover;
        }
        .flex-container {
            flex-direction: column;
            justify-content: space-around;
            align-content: center;
            width: 33%;
            height: 100%;
            margin:auto;
            background-color: lightgrey;
            text-align: center;
        }

        }
        .col-s{
            top: 10%;
            left:25;
            margin-top: 100px;
        }
        .col-sm{
            top:10%;
            left:5%;
            margin-top: 100px;
        }

        footer {
            color:black;
            text-shadow: -1px 0 black,0 1px black,1px 0 black,0 -1px black;
        }
        .remainingTime{
            font-size: 30px;
        }
        .btn btn-primary{
            top: 55%;
        }
        @media screen and (max-width: 768px) {
            .flex-container {
                width: 100%;
            }
        }
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
        <div class="row">
            <img src="EWresized.jpg" alt="EW" class="d-none d-md-block" style= "float:left;">
            <div class="flex-container">
                <div class="row" style="justify-content: space-around; margin-top: 50px">

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
                <h1 align="center">Student Details</h1>
                <table border="1" align="center" style="line-height:25px;">
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
<?php
            //Fetch data from database
            while (($row= mysqli_fetch_assoc($result)) != false){
                ?>
                <tr>
                <td><?php echo $row['name'];?></td>;
                <td><?php echo $row['znumber'];?></td>;
                <td><?php echo $row['class_crn'];?></td>;
                <td><?php echo $row['college'];?></td>;
                <td><?php echo $row['department'];?></td>;
                <td><?php echo $row['class'];?></td>;
                <td><?php echo $row['classnumber'];?></td>;
                <td><?php echo $row['classname'];?></td>;
                <td><?php echo $row['email'];?></td>;
                <td><?php echo $row['Flagged'];?></td>;
                </tr>;
                <?php
            }
            else{
                ?>
                    <tr>
                    <th colspan="2">There is no data!</th>
                    </tr>
                    <?php
            }
            ?>
                
                </table>
            </div>
            <img src="EEresized.jpg" alt="EE" class="d-none d-md-block" style="float: right;">
        </div>
    </body>
</html>

       
