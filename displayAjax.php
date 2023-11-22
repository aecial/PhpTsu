<?php
   include('database.php');
   $sql = "SELECT * FROM students";
   $result = mysqli_query($conn, $sql);

   if(mysqli_num_rows($result) > 0) { // if may result
       while ($row = mysqli_fetch_assoc($result)) {
           echo "<br> ID: ".$row['id'].
           ", First Name: ".$row['firstName'].
           ", Last Name: ".$row['lastName'];
       }
   } else { // kapag walang result
       echo '<h1>THERE ARE CURRENTLY NO STUDENTS </h1>';
   }

?>