<?php
session_start();



  if(isset($_POST['register'])){
 $First_Name = filter_input(INPUT_POST, 'fname');
 $Last_Name = filter_input(INPUT_POST, 'lname');
 $Initial = filter_input(INPUT_POST, 'initial');
 $Email = filter_input(INPUT_POST, 'ename');
 $Mobile_No = filter_input(INPUT_POST, 'mob');
 $Meeting_Time= filter_input(INPUT_POST, 'meet');
 $Off_Day= filter_input(INPUT_POST, 'offday');
 $Password = filter_input(INPUT_POST, 'pass');
 $radio = filter_input(INPUT_POST, 'sex');
 $username = filter_input(INPUT_POST, 'username');
 $checkbox = filter_input(INPUT_POST, 'ffname');
 
 // connecting with database


        define ( 'DB_HOST', 'localhost' );
        define ( 'DB_USER', 'root' );
        define ( 'DB_PASSWORD', '' );
        define ( 'DB_DB', 'seu_alumni_event' );


        // Create connection
        $conn = new mysqli(DB_HOST,DB_USER, DB_PASSWORD, DB_DB);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
          //  echo "Established";
        }
 


        // adding data to database


        $sql = "INSERT INTO `faculty`( `fname`, `lname`,`initial`, `ename`,`mob`, `meet`, `offday`, `Password`, `sex`, `username`,`ffname` )
		          VALUES ('$First_Name', '$Last_Name', '$Initial', '$Email','$Mobile_No', '$Meeting_Time', '$Off_Day', '$Password', '$radio', '$username', '$checkbox')";

        if ($conn->query($sql) === TRUE) {
			
          echo "Register Information,ation added successfully!";
		}else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
  }