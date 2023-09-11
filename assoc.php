<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $age = ['Peter' => '35', 'Ted' => '23', 'Mae' => '25'];
        foreach ($age as $name => $value) {
            echo "${name} ${value} <br>";
        }
    ?>
</body>
</html>