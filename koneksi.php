<?php
 $servername = "sql100.epizy.com";
 $username = "epiz_32958699";
 $password = "b9HbrvvNQl7DR";
 $dbname = "epiz_32958699_data_santri";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }
 ?>