<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Exam Reviewer</title>
    <!-- <script defer src="https://cdn.tailwindcss.com"></script> -->
</head>
<body class='bg-slate-200 p-4'>
    <h2>SELECT ROW</h2>
    <?php
    include('database.php'); // import ung database.php    
    if(isset($_POST['selectRow'])) { // If pinindot ung selectRow Button
        $id = $_POST['selectId']; // kunin natin ung selectId na input sa form
        $sql = "SELECT * FROM students WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) { // if may result
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<br> ID: ".$row['id'].
                ", First Name: ".$row['firstName'].
                ", Last Name: ".$row['lastName'];
            }
        } else { // kapag walang result
            echo '<h1>STUDENT DOES NOT EXIST </h1>';
        }
    }
    ?>
    <!-- ung action kung san isesend ung mga info pag sinubmit ung form -->
    <form action='labExam.php' method="post">
        <input type="number" name="selectId" id="selectId" placeholder='Enter ID' required/>
        <button type="submit" name='selectRow' class='bg-black text-white p-1 rounded-md'>SELECT ROW</button>
    </form>
    <hr>
    <h2>INSERT RECORD</h2>
    <form action="labExam.php" method='post'>
        <input type="text" name="first_name" id="first_name" placeholder='First Name' required/>
        <br>
        <br>
        <input type="text" name="last_name" id="last_name" placeholder='Last Name' required/>
        <br>
        <br>
        <button type="submit" name='insertRecord' class='bg-black text-white p-1 rounded-md'>INSERT RECORD</button>
    </form>
    <?php
        include('database.php'); // import parin ung database.php
        if(isset($_POST['insertRecord'])) { // if pinindot ung button na INSERT RECORD
            $first = $_POST['first_name']; // Kunin natin ung nasa loob nung first_name na input
            $last = $_POST['last_name'];  // Kunin natin ung nasa loob nung last_name na input
            // sql statement to input record tas palitan lang ung nasa loob
            // nung mga sinet nating variables sa taas like $first and $last
            $sql = "INSERT INTO students(firstName, lastName) VALUES ('$first','$last')";
            
            // para may feedback pag successful malagay sa db
            if($result = mysqli_query($conn, $sql)) {
                echo 'Record Added Successfully';
            } else {
                echo 'Adding Record failed :<';
            }
        }
    ?>
    <hr>
    <h2>DELETE ROW</h2>
    <!-- una may pa display muna ng mga records -->
    <?php
        include('database.php'); // import ung database.php 
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
    <form action='labExam.php' method="post">
        <input type="number" name="delId" id="delId" placeholder='Enter ID'  required/>
        <button type="submit" name='deleteRow'>DELETE ROW</button>
    </form>
    <!-- php pag pinindot ung DELETE ROW -->
    <?php
        include('database.php'); // import database
        if(isset($_POST['deleteRow'])) { // pag pinindot deleteRow button
            $delId = $_POST['delId']; // kunin ung nasa input nung delete input
            $sqlDelete = "DELETE FROM students WHERE id=$delId";
            if ($resultDel = mysqli_query($conn, $sqlDelete)) {
                echo "Deleted Record";
            }
            else {
                echo 'Failed to remove record :<';
            }
        }
    ?>
    <hr>
    <h2>UPDATE RECORD</h2>
    <form action="labExam.php" method='post'>
        <input type="number" name="updId" id="updId" placeholder='Enter ID' required/>
        <br>
        <br>
        <input type="text" name="first_name_update" id="first_name_update" placeholder='First Name' required/>
        <br>
        <br>
        <input type="text" name="last_name_update" id="last_name_update" placeholder='Last Name' required/>
        <br>
        <br>
        <button type="submit" name='updateRecord' class='bg-black text-white p-1 rounded-md'>UPDATE RECORD</button>
    </form>
    <?php
        include('database.php'); // import database
        if(isset($_POST['updateRecord'])) { // kapag pinindot ung update record
            $updId = $_POST['updId']; // kunin ung id sa update form
            $first_update = $_POST['first_name_update']; // kunin first name sa update form
            $last_update = $_POST['last_name_update']; // kunin last name sa update form

            // sql statement para mag update
            $sqlUpd = "UPDATE students SET firstName='$first_update', lastName='$last_update' WHERE id=$updId";

            // para may feedback
            if($result = mysqli_query($conn, $sqlUpd)) {
                echo "Record Updated Successfully";
            } else {
                echo "Failed to Update :<";
            }
        }
    ?>
</body>
</html>