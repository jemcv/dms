<?php
include 'config.php';

$date_archive = date("Y-m-d");

if (isset($_GET['ass_id'])) {
    $id = $_GET['ass_id'];
    $sql = "INSERT INTO `archive` (topic_name, file_data, date_posted, uploaded_by)
    SELECT topic_name, file_data, '$date_archive', uploaded_by FROM `assignment` WHERE ass_id=$id";

    $iresult = mysqli_query($conn, $sql);

    if ($iresult) {
        $dsql = "DELETE FROM `assignment` WHERE ass_id=$id";
        $dresult = mysqli_query($conn, $dsql);

        if ($dresult) {
            echo '<script>alert("assignment deleted")</script>';
            header("location: index.php");
    }
    }
}

if (isset($_GET['quiz_id'])) {
    $id = $_GET['quiz_id'];
    $sql = "INSERT INTO `archive` (topic_name, file_data, date_posted, uploaded_by)
    SELECT topic_name, file_data, '$date_archive', uploaded_by FROM `quiz` WHERE quiz_id=$id";

    $iresult = mysqli_query($conn, $sql);

    if ($iresult) {
        $dsql = "DELETE FROM `quiz` WHERE quiz_id=$id";
        $dresult = mysqli_query($conn, $dsql);

        if ($dresult) {
            echo '<script>alert("quiz deleted")</script>';
            header("location: index.php");
    }
    }
}

if (isset($_GET['lab_id'])) {
    $id = $_GET['lab_id'];
    $sql = "INSERT INTO `archive` (topic_name, file_data, date_posted, uploaded_by)
    SELECT topic_name, file_data, '$date_archive', uploaded_by FROM `lab` WHERE lab_id=$id";

    $iresult = mysqli_query($conn, $sql);

    if ($iresult) {
        $dsql = "DELETE FROM `lab` WHERE lab_id=$id";
        $dresult = mysqli_query($conn, $dsql);

        if ($dresult) {
            echo '<script>alert("lab deleted")</script>';
            header("location: index.php");
    }
    }
}

if (isset($_GET['exam_id'])) {
    $id = $_GET['exam_id'];
    $sql = "INSERT INTO `archive` (topic_name, file_data, date_posted, uploaded_by)
    SELECT topic_name, file_data, '$date_archive', uploaded_by FROM `exam` WHERE exam_id=$id";

    $iresult = mysqli_query($conn, $sql);

    if ($iresult) {
        $dsql = "DELETE FROM `exam` WHERE exam_id=$id";
        $dresult = mysqli_query($conn, $dsql);

        if ($dresult) {
            echo '<script>alert("exam deleted")</script>';
            header("location: index.php");
    }
    }
}

if (isset($_GET['proj_id'])) {
    $id = $_GET['proj_id'];
    $sql = "INSERT INTO `archive` (topic_name, file_data, date_posted, uploaded_by)
    SELECT topic_name, file_data, '$date_archive', uploaded_by FROM `proj` WHERE proj_id=$id";

    $iresult = mysqli_query($conn, $sql);

    if ($iresult) {
        $dsql = "DELETE FROM `proj` WHERE proj_id=$id";
        $dresult = mysqli_query($conn, $dsql);

        if ($dresult) {
            echo '<script>alert("project deleted")</script>';
            header("location: index.php");
    }
    }
}
?>


