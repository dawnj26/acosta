<?php
if (isset($_POST['compose'])) {
    header("Location: compose.php");
    die("dave");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        td,
        tr {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <form action="index.php" method="post">
        <input type="submit" value="Compose" name="compose"><br>
        <?php
        require "config.php";

        if (isset($_POST['delete'])) {
            $items = $_POST['item'];
            foreach ($items as $i) {
                $query1 = "DELETE FROM email WHERE id=$i";
                $conn->query($query1);
            }
        }
        
        $query = "SELECT * FROM email";

        $result = $conn->query($query);



        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<table>";
                echo "<tr>";
                echo "<td><input type='checkbox' name='item[]' value='" . $row['id'] . "'></td>";
                echo "<td>" . "<a href='view.php?id=" . $row['id'] . "'>" . $row['to_email'] . "</a>" . "</td>";
                echo "<td>" . $row['subject'] . "</td>";
                echo "<td>" . $row['death_date'] . "</td>";
                echo "</tr>";
                echo "</table>";

                // sa roomate ko yun tangina niya di man lang patayin
            }
        }
        // ohhhhh yeaaaahhh

        ?>

        <input type="submit" value="Delete" name="delete">
    </form>
</body>

</html>