<?php
session_start();

include '../config.php';

$id = $_GET['id'];  
$sql = "SELECT * FROM quiz WHERE quiz_id='$id'";
$query = mysqli_query($conn, $sql);

while($res = mysqli_fetch_assoc($query)) {
    $tn = $res['topic_name'];
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>[ Quiz ]</title>

</head>
<body>
    <div id="lines"></div>
    <video autoplay muted loop id="bgvideo">
        <source src="../assets/deku.mp4">
    </video>
        <div class="container" style="justify-content: center">
            <div class="box">
            <header>
                <h1>Quiz</h1>
                <nav>
                    [ <a href="../index.php">Home</a> ]
                </nav>
            </header>
            <br>

            <h3>EDIT MODE</h3>
            <blockquote>
                <form action="../update.php" method="post" enctype="multipart/form-data">
                    <label>*Topic Name</label>
                    <input type="text" id="topic_name" name="topic_name" value="<?php echo $tn;?>" minlength="4" maxlength="30" size="17">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <input type="submit" value="Update File" name="quiz_update">
                </form>
            </blockquote>
        </div>
    </div>
</body>
</html>