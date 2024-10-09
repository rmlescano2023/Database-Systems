<?php

    include 'DBConnector.php';

    switch ($deptNum) {
        case 1:
            $sql = "SELECT * FROM employee E INNER JOIN work W ON E.EmpID = W.EmpID WHERE DeptID = 1";  
            break;
        case 2:
            $sql = "SELECT * FROM employee E INNER JOIN work W ON E.EmpID = W.EmpID WHERE DeptID = 2";  
            break;
        case 3:
            $sql = "SELECT * FROM employee E INNER JOIN work W ON E.EmpID = W.EmpID WHERE DeptID = 3";
    }

    $result = $conn -> query($sql);

    if ($result -> num_rows > 0) {

        while ($row = $result -> fetch_assoc()) {
            
            echo "<tr>".
                "<td align='center'>".$row["EmpID"]."</td>".
                "<td align='center'>".$row["EmpName"]."</td>".
                "<td align='center'>".$row["Age"]."</td>".
                "<td align='center'>".$row["Salary"]."</td>".
                "<td align='center'>".$row["HireDate"]."</td>".
            "</tr>";
     
        }
    }
    else {

        echo "<tr>".
                "<td align='center'>"."--"."</td>".
                "<td align='center'>"."--"."</td>".
                "<td align='center'>"."--"."</td>".
                "<td align='center'>"."--"."</td>".
                "<td align='center'>"."--"."</td>".
            "</tr>";
    }

    $conn -> close();

?>