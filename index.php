<?php include_once('db/config.php'); ?>
<?php include_once('includes/header.php'); ?>


<h1>Welcome to My Portfolio!</h1>

<h2>My Skills</h2>

<ul>
    <?php
    $sql="SELECT * FROM skills";
    $result= mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($result)) {
        echo "<li>" . $row['skill_name'] ."</li>";
    }
    ?>


</ul>

<?php include_once('includes/footer.php'); ?>





