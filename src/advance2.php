<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sub task 4 and 5</title>
    <style>
      table,th,td{
        border: collapse;
        border: 2px solid black;
        width: 50%;
    }
    </style>
</head>
<body>
  <h1>deletion and updation subtask 4 & 5 </h1>
<table>
<tr>
  <th>Category</th>
  <th>Sub Category</th>
  <th>Id</th>
  <th>Name</th>
  <th>Brand</th>
</tr>
<?php 
$products = array(
    "Electronics" => array(
           "Television" => array(
                 array(
                   "id" => "PR001",
                   "name" => "MAX-001",
                   "brand" => "Samsung"
                  ),
                  array(
                  "id" => "PR002",
                  "name" => "BIG-301",
                  "brand" => "Bravia"
                   ),
                  array(
                  "id" => "PR003",
                  "name" => "APL-02",
                  "brand" => "Apple"
                   )
                   ),
           "Mobile" => array(
                    array(
                    "id" => "PR004",
                    "name" => "GT-1980",
                    "brand" => "Samsung"
                      ),
                   array(
                  "id" => "PR005",
                  "name" => "IG-5467",
                  "brand" => "Motorola"
                  ),
                    array(
                  "id" => "PR006",
                  "name" => "IP-8930",
                  "brand" => "Apple"
                    )
                   )
                  ),
    "Jewelry" => array(
             "Earrings" => array(
                   array(
                    "id" => "PR007",
                    "name" => "ER-001",
                    "brand" => "Chopard"
                   ),
                  array(
                   "id" => "PR008",
                   "name" => "ER-002",
                   "brand" => "Mikimoto"
                    ),
                  array(
                   "id" => "PR009",
                   "name" => "ER-003",
                   "brand" => "Bvlgari"
                  )
                  ),
             "Necklaces" => array(
                 array(
                  "id" => "PR010",
                  "name" => "NK-001",
                  "brand" => "Piaget"
                 ),
                 array(
                  "id" => "PR011",
                  "name" => "NK-002",
                  "brand" => "Graff"
                 ),
                 array(
                 "id" => "PR012",
                 "name" => "NK-003",
                 "brand" => "Tiffany"
                 )   
                      )  
                    )
                 );
   foreach ($products as $key => $value) {
       foreach ($value as $key1 => $val1) {
            foreach($val1 as $key2 => $val2){             
               if ($val2["id"] == "PR003"){
                  unset($val2);
                  // unset($key);
                  unset($key1);
                  }
              else if ($val2["id"] == "PR002"){
                    $val2["name"] = "BIG-555";
                  }

               echo "<tr><td>$key</td><td>$key1</td><td>$val2[id]</td><td>$val2[name]</td><td>$val2[brand]</td></tr>";
                }
            } 
          } 
           echo '</table>';
         ?>
</body>
</html>