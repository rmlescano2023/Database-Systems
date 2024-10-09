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
            $sql_get_mgr = "SELECT * FROM department";
            $mgr_result = $conn -> query($sql_get_mgr);
            $mgr_emp_ID = $mgr_result -> fetch_assoc();
            
            echo "<tr>".
                "<td align='center'>".$row["EmpID"]."</td>".
                "<td align='center'>".$row["EmpName"]."</td>".
                "<td align='center'>".$row["Age"]."</td>".
                "<td align='center'>".$row["Salary"]."</td>".
                "<td align='center'>".$row["HireDate"]."</td>";

            if($mgr_emp_ID["MgrEmpID"] == $row["EmpID"]){
				echo "<td align = 'center'> Manager </td>";
			}
			else{
				echo "<td align = 'center'> Employee </td>";    
			}

			echo "<td align = 'center'>". 
                "<form action = 'deleteEmployee.php' method = 'post'>".
                    "<input type = 'hidden' name = 'EmpID' value = '".$row["EmpID"]."'>".                   # modified these
                    "<input type = 'submit' name = 'delete' class = 'btn btn-danger' value = 'Delete'>".    # lines a bit
                "</form>".
                "<form action = 'editEmployee.php' method = 'post'>".
                    "<input type = 'hidden' name = 'EmpID' value = '".$row["EmpID"]."'>".                   # modified these
                    "<input type = 'submit' name = 'edit' class = 'btn btn-success' value = 'Edit'>".       # lines a bit
                "</form>".
            "</td>";  

            echo "</tr>";
     
        }
    }
    else {

        echo "<tr>".
                "<td align='center'>"."--"."</td>".
                "<td align='center'>"."--"."</td>".
                "<td align='center'>"."--"."</td>".
                "<td align='center'>"."--"."</td>".
                "<td align='center'>"."--"."</td>".
                "<td align='center'>"."--"."</td>".
                "<td align='center'>"."--"."</td>".
            "</tr>";
    }

    $conn -> close();

?>