<?php 
include ('../db/config.php');

if (isset($_POST['submit'])) {
    $skill=$_POST['skill'];

    $sql="INSERT INTO skills (skill_name) VALUES('$skill')";
    mysqli_query($conn,$sql);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Add Skill</title>
</head>
<body>
    <h2>Add skill</h2>

    <form method="POST">
        <input type="text" name="skill" placeholder="Enter skill">
        <button type="submit" name="submit"> Add</button>
    
    </form>
</body>
</html>