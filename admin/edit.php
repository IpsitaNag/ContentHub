<!-- header -->
<?php
include("templates/header.php");
?>

<?php
$id = $_GET['id'];
if ($id) {
    include("../connect.php");
    $sqlEdit = "select * from posts where id=$id";
    $result = mysqli_query($conn, $sqlEdit);
} else {
    echo "No post found";
}

?>

<!-- form to add new data -->
<div class="create-form w-100 mx-auto p-4" style="max-width: 700px;">
    <form action="process.php" method="post">

        <?php
        while ($data = mysqli_fetch_array($result)) {
            ?>





            <!-- title of the content -->
            <div class="form-field mb-4">
                <input type="text" class="form-control" name="title" id="" placeholder="Enter title..." 
                value="<?php
                echo $data['title'];
                ?>">
            </div>

            <!-- summary -->
            <div class="form-field mb-4">
                <textarea name="summary" class="form-control" id="" cols="30" rows="8"
                    placeholder="Enter summary.."><?php
                echo $data['summary'];
                ?></textarea>
            </div>

            <!-- content -->
            <div class="form-field mb-4">
                <textarea name="content" id="" class="form-control" cols="30" rows="8"
                    placeholder="Enter content..">
                <?php
                echo $data['content'];
                ?></textarea>
            </div>

            <!-- hide date field -->
            <input type="hidden" name="date" value="<?php echo date(" Y/m/d"); ?>">

            <input type="hidden" name="id" value="<?php echo $id;?>">

            <!-- Submit button -->
            <div class="form-field">
                <input type="submit" class="btn btn-primary" value="Update Post" name="update">
            </div>
            <?php
        }
        ?>
    </form>
</div>


<!-- footer -->
<?php
include("templates/footer.php");
?>