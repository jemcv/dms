<?php
include 'config.php';

if (isset($_POST['upload'])) {
    $upload_type = $_POST['upload_type'];
    $topic_name = $_POST['topic_name'];
    $date_posted = date("Y-m-d");

    $file = $_FILES['file_data'];
    $fileName = $_FILES['file_data']['name'];
    $fileTmpName = $_FILES['file_data']['tmp_name'];
    $fileError = $_FILES['file_data']['error'];
    $fileType = $_FILES['file_data']['type'];

    $fileExt = explode('.', $fileName);
    $fileActExt = strtolower(end($fileExt));

    // $allowed = array(); allow all files in_array($allowed)

    if ($fileActExt) {
        if ($fileError === 0) {
            if ($fileSize < 10000000) {
                $fileNameNew = uniqid('', true).".".$fileActExt;
                $fileDest = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDest);

                if ($upload_type == 'ass') {
                    $sql = "INSERT INTO `assignment` (topic_name, file_data, date_posted, uploaded_by) 
                    VALUES ('$topic_name','$fileNameNew', '$date_posted', 'Anonymous')";
                    $result = mysqli_query($conn, $sql);
    
                    if ($result) {
                        echo '<script>alert("File uploaded success")</script>'; 
                        header("Location: index.php");
                    } else {
                        echo '<script>alert("Error uploading file")</script>'; 
                    }
                } else if ($upload_type == 'quiz') {
                    $sql = "INSERT INTO `quiz` (topic_name, file_data, date_posted, uploaded_by) 
                    VALUES ('$topic_name','$fileNameNew', '$date_posted', 'Anonymous')";
                    $result = mysqli_query($conn, $sql);
    
                    if ($result) {
                        echo '<script>alert("File uploaded success")</script>'; 
                        header("Location: index.php");
                    } else {
                        echo '<script>alert("Error uploading file")</script>'; 
                    }
                } else if ($upload_type == 'lab') {
                    $sql = "INSERT INTO `lab` (topic_name, file_data, date_posted, uploaded_by) 
                    VALUES ('$topic_name','$fileNameNew', '$date_posted', 'Anonymous')";
                    $result = mysqli_query($conn, $sql);
    
                    if ($result) {
                        echo '<script>alert("File uploaded success")</script>'; 
                        header("Location: index.php");
                    } else {
                        echo '<script>alert("Error uploading file")</script>'; 
                    }
                } else if ($upload_type == 'exam') {
                    $sql = "INSERT INTO `exam` (topic_name, file_data, date_posted, uploaded_by) 
                    VALUES ('$topic_name','$fileNameNew', '$date_posted', 'Anonymous')";
                    $result = mysqli_query($conn, $sql);
    
                    if ($result) {
                        echo '<script>alert("File uploaded success")</script>'; 
                        header("Location: index.php");
                    } else {
                        echo '<script>alert("Error uploading file")</script>'; 
                    }
                } else if ($upload_type == 'proj') {
                    $sql = "INSERT INTO `proj` (topic_name, file_data, date_posted, uploaded_by) 
                    VALUES ('$topic_name','$fileNameNew', '$date_posted', 'Anonymous')";
                    $result = mysqli_query($conn, $sql);
    
                    if ($result) {
                        echo '<script>alert("File uploaded success")</script>'; 
                        header("Location: index.php");
                    } else {
                        echo '<script>alert("Error uploading file")</script>'; 
                    }
                } 

            } else {
                echo "Large file";
            }
        } else {
            echo "Error uploading file";
        }
    }
}
?>
