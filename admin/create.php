<!-- header -->
<?php
include("templates/header.php");
?>


<!-- form to add new data -->
<div class="create-form w-100 mx-auto p-4" style="max-width: 700px;">
    <form action="process.php" method="post">

        <!-- title of the content -->
        <div class="form-field mb-4">
            <input type="text" class="form-control" name="title" id="" placeholder="Enter title...">
        </div>
        
        <!-- summary -->
        <div class="form-field mb-4">
            <textarea name="summary" class="form-control" id="" cols="30" rows="8"
                placeholder="Enter summary.."></textarea>
        </div>
        
        <!-- content -->
        <div class="form-field mb-4">
            <textarea name="content" id="" class="form-control" cols="30" rows="8"
                placeholder="Enter content.."></textarea>
        </div>
        
        <!-- hide date field -->
        <input type="hidden" name="date" value="<?php echo date(" Y/m/d"); ?>" >
        
        <!-- Submit button -->
        <div class="form-field">
            <input type="submit" class="btn btn-primary" value="Add Post" name="create">
        </div>
    </form>
</div>


<!-- footer -->
<?php
include("templates/footer.php");
?>