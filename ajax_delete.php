<?php
$id = $_POST["id"];
include "_dbconnect.php";

$sql = "DELETE FROM employee WHERE id = $id";

if(mysqli_query($conn, $sql)){
echo 1;
}
else{
    echo 0;
}
?>