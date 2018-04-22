<!DOC html>
<html>
    <style>

        img{
            width: 33%;
            height: 100%;
            object-fit:cover;
        }
        .flex-container {
            flex-direction: row;
            justify-content: space-around;
            align-content: center;
            width: 33%;
            height: 100%;
            margin:auto;

            background-color: lightgrey;
            text-align: center;

        }
        .col-1 {width: 8.33%;}
        .col-2 {width: 16.66%;}
        .col-3 {width: 25%;}
        .col-4 {width: 33.33%;}
        .col-5 {width: 41.66%;}
        .col-6 {width: 50%;}
        .col-7 {width: 58.33%;}
        .col-8 {width: 66.66%;}
        .col-9 {width: 75%;}
        .col-10 {width: 83.33%;}
        .col-11 {width: 91.66%;}
        .col-12 {width: 100%;}


        footer {
            color:white;
            text-shadow: -1px 0 black,0 1px black,1px 0 black,0 -1px black;}
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

                    <div class="col-sm-4">
                        <a href="#">
                            <span class="glyphicon glyphicon-fire" style="font-size: 30px;color:black;"></span>
                        </a>
                        <footer> Solder</footer> 
                    </div>
                    <div class="col-sm-4">
                        <a href="#">
                            <span class="glyphicon glyphicon-wrench" style="font-size: 30px; color:black;"></span>

                        </a>
                        <footer> CNC Tools</footer>
                    </div>
                    <div class="col-sm-4">
                        <a href="#">
                            <span class="glyphicon glyphicon-flash" style="font-size: 30px; color: black;"></span>

                        </a>
                        <footer>Workbench</footer> 
                    </div>
                </div>

                <form action="page7.php" method="POST" style="margin-top: 200px;margin-right: 30px;">

                    <div class="form-group col-l" >

                        <select class="form-control" id="labuse" placeholder= "What are you using the lab for?">
                            <option>Class Lab</option>
                            <option>Personal Use</option>
                        </select>
                        <br>
                        <select class="form-control" placeholder= "Where do you want to work?" id="labloc">
                            <option>Engineering East</option>
                            <option>Engineerng West</option>
                        </select>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control"  name="znumber" placeholder= "enter your z number" id="znumber">
                        </div>
                        <br>
                        <p>Do you swear to use the lab responsibly and ethically?</p>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"><br> I agree to the lab terms and conditions
                            </label>
                        </div>
                        <button type="submit" name= "submit" class="btn btn-primary">Submit Request</button>
                        <?php 
                            if(isset($_REQUEST)){
                                $znumber=$_REQUEST['znumber'];
                            }
                        ?>
                    </div>
                </form>

            </div>
            <img src="EEresized.jpg" alt="EE" class="d-none d-md-block" style="float: right;">
        </div>
    </body>
</html>
