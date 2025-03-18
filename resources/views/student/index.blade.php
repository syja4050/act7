<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets\css\style.css') }}">
    <title>Document</title>
</head>
<body>

<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
    </tr>
    <?php
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $student->first_name . "</td>";
        echo "<td>" . $student->last_name . "</td>";
        echo "<td>" . $student->address . "</td>";
        echo "</tr>";
    }
    ?>
</table>
    
</body>
</html>

