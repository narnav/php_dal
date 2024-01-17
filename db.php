<?php
include 'DAL.php';
 
// $st = executeSQLWithResult("SELECT * FROM shop.products;");
$sql="SELECT * FROM shop.products;";
$result =executeSQLWithResult($sql);      
        
    while($row = $result->fetch_assoc()) {
        $newArr[] = $row;
    }
    echo json_encode($newArr); // 
?>