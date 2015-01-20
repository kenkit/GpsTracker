<?php
    header ("content-type: text/xml");
 
    $link = mysql_connect ("localhost", "root", "toor");
    if (!$link) {
        die('Could not connect: ' . mysql_error());
    }
 
    mysql_select_db ("location");
 
    //If no search string is passed, then we can't search
    if(empty($_GET["id"])) {
        echo " ";
    } else {
        //Remove whitespace from beginning x%x% end of passed search.
        $search = trim($_GET["id"]);
 
        //Query the DB and store the result in a variable
        $query = mysql_query("SELECT * FROM gps WHERE id=".$search);
 
        //If no rows are found...
        if(mysql_num_rows($query) == 0) {
            echo " ";
        } else {
            //Stick the returned rows into a handy array for easy use
            $row = mysql_fetch_array($query) or die(mysql_error()); 
 
            //Write out XML using values returned by the query
            echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?><markers><marker lat=\"".$row["lat"]."\" lng=\"".$row["lng"]."\" /></markers>";
        }
    }
 
    mysql_close($link);
?>
