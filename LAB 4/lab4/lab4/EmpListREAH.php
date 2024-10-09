<?php
	include 'DBConnector.php';

	if ($deptID == 1){
		$sql = "SELECT * FROM employee e INNER JOIN work w ON e.EmpID = w.EmpID WHERE DeptID = 1";
	}
	elseif ($deptID == 2){
		$sql = "SELECT * FROM employee e INNER JOIN work w ON e.EmpID = w.EmpID WHERE DeptID = 2";  
	}
	elseif($deptID == 3){
		$sql = "SELECT * FROM employee e INNER JOIN work w ON e.EmpID = w.EmpID WHERE DeptID = 3";  
	}
	$result = $conn -> query($sql);  

	
	

	if($result -> num_rows >0){
		while($row = $result -> fetch_assoc()){
			$mgr_sql = "SELECT * FROM department";
			$mgr_result = $conn -> query($mgr_sql);
			$mgr_row = $mgr_result -> fetch_assoc();


			echo "<tr>".
				"<td align='center'>".$row["EmpID"]."</td>".
				"<td align='center'>".$row["EmpName"]."</td>".
				"<td align='center'>".$row["Age"]."</td>".
				"<td align='center'>".$row["Salary"]."</td>".
				"<td align='center'>".$row["HireDate"]."</td>";
			if($mgr_row["MgrEmpID"] == $row["EmpID"]){
				echo "<td align = 'center'> Manager </td>";
			}
			else{
				echo "<td align = 'center'> Employee </td>";
			}
			echo "<td align = 'center'>". 
                "<a href='deleteEmployee.php?EmpID=".$row['EmpID']."'>".
                "<button type = 'button' name = 'delete' value = 'Delete'>Delete</form>".
                "<a href='editEmployee.php?EmpID=".$row['EmpID']."'>".
                "<button type = 'button' name = 'edit' value = 'Edit'>Edit</form>".
            "</td>";  
		}
	}
	else{ 
		echo "<tr>".  //insert "---" in each datacell if there is no result                                                         
                "<td align = 'center'>". "---" . "</td>".
                "<td align = 'center'>". "---" . "</td>".
                "<td align = 'center'>". "---" . "</td>".
                "<td align = 'center'>". "---" . "</td>".
                "<td align = 'center'>". "---" . "</td>".
                "<td align = 'center'>". "---" . "</td>".
                "<td align = 'center'>". "---" . "</td>".
            "</tr>";
	} 
	$conn->close();
?>