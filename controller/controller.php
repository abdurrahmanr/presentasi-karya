<?php

include '../db/db.php';
function select($query)
{
    global $db;

    $resultss = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($resultss)) {
        $rows[] = $row;
    }

    return $rows;
}

function create($data)
{
    global $db;

    $nama = $_POST['task'];
    $query = "INSERT INTO tasks (task_name) VALUES ('$nama')";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

?>