<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array basic subtask 3</title>
</head>
<body>
    <?php
     $farray = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black'); 
     $sarray = array('c2', 'c4');
     $final = array_diff_key( $farray, array_flip( $sarray));
     print_r($final);
   ?>
</body>
</html>