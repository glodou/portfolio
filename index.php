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

<div class="tools-container">
    <h2>TOOLS</h2>
    <div class="tools-icons">
        <img src="/portfolio/assets/icons/html-5.png" alt="">
        <img src="/portfolio/assets/icons/js.png" alt="">
        <img src="/portfolio/assets/icons/mysql.png" alt="">
        <img src="/portfolio/assets/icons/php.png" alt="">
        <img src="/portfolio/assets/icons/css-3.png" alt="">

    </div>


</div>




<div class="contact-container">
  <h2>Contact</h2>
  <p>Feel free to reach out for collaborations or opportunities</p>
  <form>
    <input type="text" placeholder="Your Name">
    <input type="email" placeholder="Your Email">
    <textarea placeholder="Your Message"></textarea>
    <button type="submit">Send</button>
  </form>
</div>




<?php include_once('includes/footer.php'); ?>





