<?php
    require_once "../../signup/config.php";
?>
<?php
if (isset($_SESSION['score'])) 
{
        $score = (int)$_SESSION['score'];
            $username =$_SESSION['username'];
            $sql = "UPDATE users set snake_score = '$score' where username = '$username' ";
            mysqli_query($conn,$sql);
            $_SESSION['snake_score'] = $score;
}
else
{
    echo 'Query didnot execute';
}

?>



  



