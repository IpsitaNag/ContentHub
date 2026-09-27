<?php
include("templates/header.php");
?>

<div class="post w-100  bg-light p-5">
    <?php
    
    $id=$_GET["id"];
    if($id){
        include("../connect.php");
        $sqlSelectPost="Select * from posts where id=$id";
        $result = mysqli_query($conn,$sqlSelectPost);
        while($data=mysqli_fetch_array($result)){
        ?>
         <h1><?php echo $data['title'];?></h1>
         <p><?php echo $data['date'];?></p>
         <h4>Summary</h4>
         <p><?php echo $data['summary'];?></p>
         <h4>Article</h4>
         <p><?php echo $data['content'];?></p>
        <?php
        }
    }
    else{
        echo "Post not found";
    }
    
    ?>
</div>

<?php
include("templates/footer.php");
?>