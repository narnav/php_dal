<?php include 'navbar.html';?>
<?php
include 'DAL.php';
    // $con= getCon();
    $query = "SELECT * FROM shop.products;";
    $stmt = getdata($query);
    
        while ($stmt->fetch()) {
            printf("%s, %s <br>", $field1, $field2,$field3);
        }
        $stmt->close();
    
?>


<?php include 'footer.php';?>