<?php
include 'config.php';

if (isset($_POST['ass_update'])) {
    $id = $_POST['id'];
    $topic_name = $_POST['topic_name'];

    $sql = "UPDATE `assignment` SET topic_name ='$topic_name' WHERE ass_id=$id";

    $res = mysqli_query($conn, $sql);

    if($res) {
        echo '<script>alert("Updated Successfully")</script>';
        header("Refresh: 0; url=./index.php");
    } else {
        echo '<script>alert("Error updating")</script>'; 
    }
}

if (isset($_POST['quiz_update'])) {
    $id = $_POST['id'];
    $topic_name = $_POST['topic_name'];

    $sql = "UPDATE `quiz` SET topic_name ='$topic_name' WHERE quiz_id=$id";

    $res = mysqli_query($conn, $sql);

    if($res) {
        echo '<script>alert("Updated Successfully")</script>';
        header("Refresh: 0; url=./index.php");
    } else {
        echo '<script>alert("Error updating")</script>'; 
    }
}

if (isset($_POST['lab_update'])) {
    $id = $_POST['id'];
    $topic_name = $_POST['topic_name'];

    $sql = "UPDATE `lab` SET topic_name ='$topic_name' WHERE lab_id=$id";

    $res = mysqli_query($conn, $sql);

    if($res) {
        echo '<script>alert("Updated Successfully")</script>';
        header("Refresh: 0; url=./index.php");
    } else {
        echo '<script>alert("Error updating")</script>'; 
    }
}

if (isset($_POST['exam_update'])) {
    $id = $_POST['id'];
    $topic_name = $_POST['topic_name'];

    $sql = "UPDATE `exam` SET topic_name ='$topic_name' WHERE exam_id=$id";

    $res = mysqli_query($conn, $sql);

    if($res) {
        echo '<script>alert("Updated Successfully")</script>';
        header("Refresh: 0; url=./index.php");
    } else {
        echo '<script>alert("Error updating")</script>'; 
    }
}

if (isset($_POST['project_update'])) {
    $id = $_POST['id'];
    $topic_name = $_POST['topic_name'];

    $sql = "UPDATE `proj` SET topic_name ='$topic_name' WHERE proj_id=$id";

    $res = mysqli_query($conn, $sql);

    if($res) {
        echo '<script>alert("Updated Successfully")</script>';
        header("Refresh: 0; url=./index.php");
    } else {
        echo '<script>alert("Error updating")</script>'; 
    }
}
?>