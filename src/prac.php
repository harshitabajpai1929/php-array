<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table>
        <tr>
            <th>index</th>
            <th>value</th>
        </tr>
        <?php
        $a= array(1,2,3,4,5);
         for ($i=0;$i<5;$i++)
         {
          echo "<tr><td>".$i."</td><td>".$a[$i]."</td></tr>";
         }
         echo '</table>';
         ?>
    </table>
</body>
</html>