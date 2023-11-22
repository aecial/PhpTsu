<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
</head>
<body>
    <hr>
    <h1 id="input1">INP1 OUTPUT</h1>
    <hr>
    <script>
        let inp = document.getElementById("input1");
       document.addEventListener("DOMContentLoaded", function() {
            const data1 = document.getElementById("input1");
            function fetchData() {
                const xhr = new XMLHttpRequest();
                console.log(xhr)
                xhr.open("GET", "displayAjax.php", true);
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        data1.innerHTML = xhr.responseText;
                    }
                }
                xhr.send();
            }
            fetchData();
            setInterval(fetchData, 1000);
        })

    </script>
</body>
</html>