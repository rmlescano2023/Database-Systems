<!-- This is a modified version of the index.php file -->

<!DOCTYPE html>

<html>
<style>
    body {
        font-family: Calibri, Candara, Segoe, Segoe UI, Optimize, Arial, sans-serif;
        background-image: url('3813469.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }
</style>

<body>

    <h2 style = "color: silver;">DPSM:</h2>
    <table style = "width: 100%">
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
        $deptNum = 1;
        include 'listOfEmployees_Lab4.php';
    ?>
    </table>
    <br>

    <h2 style = "color: silver;">Dummy Department:</h2>
    <table style = "width: 100%">
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
        $deptNum = 2;
        include 'listOfEmployees_Lab4.php';
    ?>
    </table>
    <br>

    <h2 style = "color: silver;">Ghost Department:</h2>
    <table style = "width: 100%">
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
        $deptNum = 3;
        include 'listOfEmployees_Lab4.php';
    ?>
    </table>
    <br>

</body>

</html>