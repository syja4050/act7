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