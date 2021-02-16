<?php
    session_start();
    //1. Connect to the DB
    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "mydb";
    $db_connection = mysqli_connect($host, $db_user, $db_password, $db_name);
    if ($db_connection === false) {
        die("Error: Cannot connect to the database");
    }

    $sql = "SELECT * FROM `viand`";
    $result = mysqli_query($db_connection, $sql);
    $array = array(); //for the whole items in table
    $search_q = array(); //to save each id that you were looking for
    while($search_row = mysqli_fetch_assoc($result)){
        // add each row returned into an array
        $array[] = $search_row; 
      }
    shuffle($array);
    function search($arr, $x) {
        for($i = 0; $i < sizeof($arr); $i++) {
            if($arr[$i]['sugg_tag'] == $x){
                $search_q[] = $arr[$i]['viand_id']; //instead of i, get id instead.
            }
            if(sizeof($search_q) == 4){
                break;
            }
        }
        //save the suggested id on the session, or overwrite if exist
        $_SESSION["suggested_viands"] = $search_q; 
        header("Location: index.php"); //proceed to index.php
    }
    search($array, "Suggested"); //looking for suggested viands
?>


