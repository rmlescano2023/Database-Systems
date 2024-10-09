

<?php

include 'DBConnector.php';                                           // Connect to the database

$del_EmpID = $_GET['EmpID'];                                        //delete employee

$sql = "DELETE FROM employee WHERE EmpID = '$del_EmpID';";            //delete employee
$del_result = $conn-> query($sql);

if($conn -> query($sql) == TRUE){                                     //if the query is successful
    header("Location:index.php");                              //redirect to the employees page
    exit;                                                         //exit the script
}

else{
    echo "Error: ".$sql."<br/>".$conn -> error;                    //display error message
}


$conn->close()

?>