<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subtask 4</title>
</head>
<body>
    <?php
    $sub = array('key1' => 'blue', 'key2' => 'yellow', 'key3' => 'grey');
     $given_value = 'grey';

     $new_array = array_filter($sub, function ($element) use ($given_value)
     {
          return ($element != $given_value);
    }); 
    print_r($new_array);
    ?>
</body>
</html>