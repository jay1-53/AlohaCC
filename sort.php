<?php
    session_start();
	$host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_name = "mydb";
	$db_connection = mysqli_connect($host, $db_user, $db_password, $db_name);
	$username = $_SESSION['user_name'];
	if ($db_connection === false) {
		die("Error: Cannot connect to the database");
    }
    
    function merge_sort($my_array){
        if(count($my_array) == 1 ) return $my_array;
        $mid = count($my_array) / 2;
        $left = array_slice($my_array, 0, $mid);
        $right = array_slice($my_array, $mid);
        $left = merge_sort($left);
        $right = merge_sort($right);
        return merge($left, $right);
    }
    function merge($left, $right){
        $res = array();
        while (count($left) > 0 && count($right) > 0){
            if(isset($_GET['descending'])){
                if($left[0] < $right[0]){
                    $res[] = $right[0];
                    $right = array_slice($right , 1);
                }else{
                    $res[] = $left[0];
                    $left = array_slice($left, 1);
                }
            }else if(isset($_GET['ascending'])){
                if($left[0] > $right[0]){
                    $res[] = $right[0];
                    $right = array_slice($right , 1);
                }else{
                    $res[] = $left[0];
                    $left = array_slice($left, 1);
                }  
            }else{
                if($left[0] < $right[0]){
                    $res[] = $right[0];
                    $right = array_slice($right , 1);
                }else{
                    $res[] = $left[0];
                    $left = array_slice($left, 1);
                }
            }
        }
        while (count($left) > 0){
            $res[] = $left[0];
            $left = array_slice($left, 1);
        }
        while (count($right) > 0){
            $res[] = $right[0];
            $right = array_slice($right, 1);
        }
        return $res;
    }
    $sql = "SELECT * FROM `food_diary`";
    $result = mysqli_query($db_connection, $sql);
    $array = array(); //for the whole items in table
    while($fd_row = mysqli_fetch_assoc($result)){
        // add each row returned into an array
        $array[] = $fd_row['fd_date']; 
    }
    echo "\nSorted Array :";
    echo implode(', ',merge_sort($array))."\n";
?>