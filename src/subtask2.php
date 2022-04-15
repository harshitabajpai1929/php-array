<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Array basic subtask 2</title>
</head>
<body>
    <?php
    $recordedtemp =array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
       sort($recordedtemp);
       $a = array_sum($recordedtemp);
       $b = count($recordedtemp);
       $c = $a/$b;
       echo "Average Temperature is :". round($c);
       echo "<br>";
      echo "List of seven lowest Temperature :";
         for($i=0; $i < 7; $i++){
             echo array_unique($recordedtemp)[$i]." ";
         }
         echo "<br>";
        echo "List of seven highest Temperature : ";
        rsort($recordedtemp);
            for($i=0; $i < 7; $i++){
                echo array_unique($recordedtemp)[$i]." ";
                 } 
        ?>
    </body>
</html>