<?php include_once('db/config.php'); ?>
<?php include_once('includes/header.php'); ?>

<div class="home-container">

    <div class="home-text">
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
    </div>

    <div class="home-image">

<img src="/portfolio/assets/images/laptop.jpg" alt="">
    </div>

</div>
<?php include_once('includes/footer.php'); ?>





