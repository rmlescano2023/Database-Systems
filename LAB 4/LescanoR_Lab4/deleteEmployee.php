<?php

include 'DBConnector.php';


if (isset($_POST['delete'])) {
    
    $id = $_POST['EmpID'];
    $sql = "DELETE FROM employee WHERE EmpID = '$id'";
    $result = $conn -> query($sql);

    if ($result) {

        header("Location: index.php");
        exit;
    }
    else {
        echo "Error: ".$sql."<br/>".$conn -> error;
    }

}


$conn -> close();

?>