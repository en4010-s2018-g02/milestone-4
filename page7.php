
    
<?php
require page5.html;
?>


    <ul>
        <?php

        $query=mysqli_query("SELECT 'name','znumber','class_crn','classname' FROM 'znumber' WHERE 'znumber'=('$_POST[znumber]')"
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