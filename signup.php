<?php
   $username = $_POST['username'];
   $password = $_POST['password'];
   $email = $_POST['email'];
   $height = $_POST['height'];
   $weight = $_POST['weight'];
   $birthdate = $_POST['birthdate'];
   $activityLvl = $_POST['activityLvl'];
   //db
   $host = "localhost";
   $db_user = "root";
   $db_password = "";
   $db_name = "mydb";
   $db_connection = mysqli_connect($host, $db_user, $db_password, $db_name);

   if ($db_connection === false) {
       die("Error: Cannot connect to the database");
   }

   $sql = "SELECT * FROM `user` WHERE user_name='".$username."'";
   $result = mysqli_query($db_connection, $sql);
   $count = mysqli_num_rows($result);

   if($count >= 1){
       header("Location: index.php?username=exist");
   } else {
       $sql = "INSERT INTO `user`(`user_name`, `user_email`, `user_password`, `user_birthdate`, `user_height`, `user_weight`, `Activity Level_activitylvl_id`) 
       VALUES ('".$username."','".$email."','".$password."','".$birthdate."',
       '".$height."','".$weight."','".$activityLvl."')";
               mysqli_query($db_connection, $sql);
               //4. Close DB connection
               mysqli_close($db_connection);
               /*$data = $fname . "," . $lname . "," . $gender . "\n";
               //a means appends or add (no. of users)
               $csv_file = fopen("users.csv", "a");
               //write data to the opened file
               fwrite($csv_file, $data); //the input
               //closing the opened file with autosave
               fclose($csv_file);
               */
               //echo "Register successful";
               header("Location: index.php");
   }
?>