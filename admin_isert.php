<?php
session_start();



  if(isset($_POST['adminregister'])){
 $First_Name = filter_input(INPUT_POST, 'fname');
 $Last_Name = filter_input(INPUT_POST, 'lname');
 $Email = filter_input(INPUT_POST, 'ename');
 $Mobile_No = filter_input(INPUT_POST, 'mob');
 $Password = filter_input(INPUT_POST, 'pass');
 $radio = filter_input(INPUT_POST, 'sex');
 $username = filter_input(INPUT_POST, 'username');
 $checkbox = filter_input(INPUT_POST, 'ffname');
 

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


       $sql = "INSERT INTO `admin`( `fname`, `lname`, `ename`,`mob`, `Password`, `sex`, `username`,`ffname` )
		          VALUES ('$First_Name', '$Last_Name', '$Email','$Mobile_No', '$Password', '$radio', '$username', '$checkbox')";

        if ($conn->query($sql) === TRUE) {
			
          echo "Register Information,ation added successfully!";
		}else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
  }
  