<!-- create post -->

<?php

if (isset($_POST["create"])) {

    include("../connect.php");

    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);

    $sqlInsert = "INSERT INTO posts(date,title,summary,content) VALUES ('$date','$title', '$summary', '$content')";

    if (mysqli_query($conn, $sqlInsert)) {
        session_start();
        $_SESSION["create"] = "Post added successfully";
        header("Location:index.php");
    } else {
        die("data is not inserted");
    }
}




?>


<!-- update post -->
<?php

if (isset($_POST["update"])) {

    include("../connect.php");

    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);

    $sqlUpdate = "UPDATE posts SET 
        title='$title',
        summary='$summary',
        content='$content',
        date='$date'
        WHERE id='$id'";

    if (mysqli_query($conn, $sqlUpdate)) {
        header("location:index.php");
    } else {
        die("Data is not updated!");
    }
}

?>