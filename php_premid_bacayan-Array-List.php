<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array_List</title>
</head>
<body>
    <?php
    $list = array();
    function addElement($new){
        foreach( $new as $value ) {
            echo"<ul>";
            echo"<li>";
            echo "$value";
            echo"</li>";
            echo"</ul>";
        }  
    }
    addElement([11]);
    addElement([78]);
    addElement([43,52,53]);
    ?>
</body>
</html>