<?php
include("templates/header.php");
?>


<!-- message alert -->
<div class="posts-list w-100 p-5">
    <?php
    if (isset($_SESSION["create"])) {
        ?>
        <div class="alert alert-success">
            <?php
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
    }
    ?>
         <?php
         if (isset($_SESSION["update"])) {
             ?>
        <div class="alert alert-success">
            <?php
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
         }
         ?>
        <?php
        if (isset($_SESSION["delete"])) {
            ?>
        <div class="alert alert-success">
            <?php
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
        ?>


    <table class="table table-bordered">

        <!-- headings og the table -->
        <thead>
            <tr>
                <th style="width: 15%;text-align: center;">Publication Date</th>
                <th style="width: 20%; text-align: center;">Title</th>
                <th style="width: 25%; text-align: center;">Actions</th>
            </tr>
        </thead>

        <!-- body or data of the table -->
        <tbody>

            <?php

            include("../connect.php");

            $sqlSelect = "select * from posts";
            $result = mysqli_query($conn, $sqlSelect);

            while ($data = mysqli_fetch_array($result)) {
                ?>

                <tr>
                    <td><?php echo $data["date"] ?></td>
                    <td><?php echo $data["title"] ?></td>

                    <!-- for action buttons -->
                    <td>
                        <a class="btn btn-info" style="margin-right: 8px;"
                            href="view.php?id=<?php echo $data["id"] ?>">View</a>

                        <a class="btn btn-warning" style="margin-right: 8px;"
                            href="edit.php?id=<?php echo $data["id"] ?>">Edit</a>

                        <a class="btn btn-danger" href="delete.php?id=<?php echo $data["id"] ?>">Delete</a>
                    </td>
                </tr>

                <?php
            }




            ?>
        </tbody>


    </table>
</div>



<?php
include("templates/footer.php");
?>