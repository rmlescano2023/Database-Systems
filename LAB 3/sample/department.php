<?php

    include 'DBConnector.php';

    $sql = "INSERT INTO `employee` (`EmpID`, `EmpName`, `Age`, `Salary`, `HireDate`)
            VALUES ('1', 'John Doe', '40', '20000.5000', '2019-09-01');";

    $sql = "SELECT * FROM department";  
    $result = $conn -> query($sql);

    if ($result -> num_rows > 0) {

        while ($row = $result -> fetch_assoc()) {
            $mgrID = $row["MgrEmpID"];
            $sql_get_ManagerName = "SELECT EmpName FROM employee WHERE EmpID = '$mgrID'";
            $mgrName = $conn->query($sql_get_ManagerName)->fetch_assoc();

            echo "<tr>".
                "<td align='center'>".$row["DeptID"]."</td>".
                "<td align='center'>".$row["DeptName"]."</td>".
                "<td align='center'>".$mgrName["EmpName"]."</td>".
                "<td align='center'>".$row["Budget"]."</td>".
                "<td align='center'>".$row["DeptCity"]."</td>".
            "</tr>";
        }
    }
    else {
        echo "0 results";
    }

    $conn -> close();

?>