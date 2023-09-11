<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="forms.php" method="get">
    <label for="text">Input Text: </label>
    <input type="text" name="text" id="text">
    <button type="submit">Submit</button>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "post") {
            $name = $_POST["text"];
            echo "<h1>POST $name</h1>";
        } else {
            $name = $_GET["text"];
            echo "<h2>GET $name</h2>";
        }
    ?>
</body>
</html>