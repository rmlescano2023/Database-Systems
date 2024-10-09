<!-- CMSC127 Laboratory by Reah Mae Sardañas -->


<!DOCTYPE html>
<html>
    <style>

        body{
        font-family: Calibri, Candara, Segoe, Segoe UI, Optimize, Arial, sans-serif; 
        color: white;
    }
    </style>
    
    <body>
      
        <h2 style="color: silver;">DPSM</h2>  
        <table style="width:100%">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Salary</th>
                <th>Hire Date</th>
                <th>Designation</th>
                <th>Action</th>
            </tr>
            <?php
                $deptID = 1;
                include 'EmpList.php';
            ?>
        </table>   
     
        <h2 style="color: silver;">Dummy Department</h2>
        <table style="width:100%">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Salary</th>
                <th>Hire Date</th>
                <th>Designation</th>
                <th>Action</th>
            </tr>
            <?php
                $deptID = 2;
                include 'EmpList.php';
            ?>
        </table>   

        <h2 style="color: silver;">Ghost Department</h2>
        <table style="width:100%">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Salary</th>
                <th>Hire Date</th>
                <th>Designation</th>
                <th>Action</th>
            </tr>
            <?php
                $deptID = 3;
                include 'EmpList.php';
            ?>
        </table>   
    </body>
</html>
