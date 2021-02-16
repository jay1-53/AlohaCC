<?php  
    session_start();
    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "mydb";
    $viands_checkbox = $_POST['viand_food'];
    $db_connection = mysqli_connect($host, $db_user, $db_password, $db_name);
    //get uid
    $sql = "SELECT * FROM `user` WHERE user_name='".$_SESSION['user_name']."'";
    $result = mysqli_query($db_connection, $sql);
    $record = mysqli_fetch_array($result);
    $user_id = $record['user_id'];

    //inject fd
    foreach($viands_checkbox as $checked_viands){
        $sql = "INSERT INTO `food_diary`(`viand_id`, `user_id`, `fd_date`)
        VALUES ('".$checked_viands."','".$user_id."',CURRENT_TIMESTAMP)";
        mysqli_query($db_connection, $sql);
    }
    header("Location: dash.php");
?>