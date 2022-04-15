<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic subtask 1</title>
</head>
<body>
    <?php
       $original= array('1','2','3','4','5');
       echo "original array :"."\n";
       echo "<br>";
       foreach($original as $x)
       {echo "$x";}
       echo "<br>";
       $insert ='$';
       array_splice($original,3,0,$insert);
       echo "\n"."after inserting '$' the array is :"."\n";
       echo "<br>";
       foreach($original as $x)
       {
           echo "$x";
    }
    echo "\n";
     ?>
</body>
</html>