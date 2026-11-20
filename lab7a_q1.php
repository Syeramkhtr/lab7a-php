<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q1</title>
</head>
<body>
    <?php
        $name = "Nur Syahirah Binti Mokhtar";
        $matric = "CI250046";
        $course = "Bachelor of Software Enggineering";
        $year = 3.5;
        $address = "Melaka,Malaysia";
    ?>

    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo "$name" ?></td>
        </tr>
        <tr>
            <td>No Matric</td>
            <td><?php echo "$matric" ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course" ?></td>
        </tr>
        <tr>
            <td>Year of study</td>
            <td><?php echo "$year" ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address" ?></td>
        </tr>
    </table>
</body>
</html>