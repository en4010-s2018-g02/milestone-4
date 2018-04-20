

    <ul>
        <?php
        require ('page5.html');
        $link = sqli_connect("lamp.eng.fau.edu","CEN4010_S2018g02","cen4010_s2018","CEN4010_S2018g02");
        
        $query=mysqli_query($link,"SELECT 'name','znumber','class_crn','classname' FROM module3 WHERE 'znumber'=('$_POST[znumber]')")
                            while (($row= mysql_fetch_assoc($query)) != false){
                                echo '<li>',$row['name'],'</li>';
                                echo '<li>',$row['znumber'],'</li>';
                                echo '<li>',$row['class_crn'],'</li>';
                                echo '<li>',$row['classname'],'</li>';

                            }
?>
</ul>
<?php
        mysqli_close($conn);
        sleep(5);
        header('file:///C:/Users/SusyBW65/Documents/page7.html');
        exit;
    ?>
