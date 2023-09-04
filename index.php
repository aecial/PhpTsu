<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Prac</title>
  <link rel="stylesheet" href="output.css">
</head>
<body class="bg-gray-800 text-slate-200 container  mx-auto">
  <?php
    echo "<h1 class='text-center text-6xl'>PHP Prac</h1>";
    $colors = ["color1" => "red","color2" => "blue","color3" => "green"];
    foreach ($colors as $key => $value) {
      echo $key." : ".$value."<br>";
    }
    $animals = ["dog", "cat", "hamster"];
    for($i = 0; $i < count($animals); $i++) {
      echo $animals[$i]." ";
    }
    $i = 0;
    while ($i < count($animals)) {
      echo "<br>".$animals[$i]." ";
      $i++;
      echo "<br>";
    }
    $cars = [
      ["Toyota", 22],
      ["Honda", 12],
      ["Mitsubishi", 25],
    ];
    for($i = 0; $i < count($cars); $i++) {
      echo "<br> Brand:  ";
      for($j = 0; $j < count($cars[$i]); $j++) {
        echo $cars[$i][$j]." ";
        echo "<br>";
      }
    }

    foreach ($cars as $car) {
      echo "<br>";
      foreach ($car as $ca) {
        echo $ca."<br>";
      }
    }
    echo "<div class='bg-slate-900 backdrop-blur-3xl h-48 flex items-center justify-center'>
    <h1 class='text-4xl text-center bg-slate-600 p-10 '>Ror</h1>
    </div>";
  ?>
</body>
</html>