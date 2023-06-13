<?php
include 'config.php';

if (isset($_GET['archive_id'])) {
    $id = $_GET['archive_id'];

    $dsql = "DELETE FROM `archive` WHERE archive_id=$id";
    $dresult = mysqli_query($conn, $dsql);

    if ($dresult) {
        echo '<script>alert("archive deleted")</script>';
        header("location: index.php");
    }
}