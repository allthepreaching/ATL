<?php
include_once 'dbh.inc.php';

if (isset($_POST["name"])) {
    $query = "SELECT * FROM verses WHERE name = '" . $_POST["name"] . "'";
    $result = mysqli_query($conn, $query);
    $output = '';
    while ($row = mysqli_fetch_array($result)) {
        $output .= $row["verse"] . '<cite>' . $row["name"] . '&nbsp;' . $row["kjv"] . '</cite>';
    }
    echo $output;
}
