<?php
    include './includes/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/app.css">
</head>
<body>
    <div id="container">
        <form action="clockHandAngle.php" method="GET">
            <fieldset>
                <label>Въведете час:</label>
                <input type="text" name="hours">
            </fieldset>
            <fieldset>
                <label>Въведете минути:</label>
                <input type="text" name="minutes">
            </fieldset>
            <fieldset>
                <label>Въведете секунди:</label>
                <input type="text" name="seconds">
            </fieldset>
            <fieldset>
                <button class="btn" type="submit">Изчисли</button>
            </fieldset>
        </form>
        <?php 
            if(isset($_GET['hours'])) {
                $hours = trim($_GET['hours']);
                $minutes = trim($_GET['minutes']);
                $seconds = trim($_GET['seconds']);
                if(validateTime($hours, $minutes, $seconds) === true) {
                    $time = date('H:i:s', strtotime($hours . ':' . $minutes . ':' . $seconds));
                    echo clockHandAngle($time) . ' градус/а';
                } else {
                    echo validateTime($hours, $minutes, $seconds);
                }
               
            } 
        ?>
    </div>
    
</body>
</html>