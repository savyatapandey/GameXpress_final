<?php 
session_start();
$_SESSION['score'] = $_GET['score']
?>

<?php
    if($_SESSION['score']>$_SESSION['snake_score'])
    {
        include 'score.php';

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAME OVER</title>
   <style>
        *{
    margin : 0;
    padding : 0;
    box-sizing: border-box;
}
.left-container{
    width : 65%;
    height : 100vh;
    background:black;
    display :inline-flex;
    flex-direction: column;
    align-items : center;
    justify-content : center;
}

.left-container h1{
    font-size : 100px;
   
  font-family: 'Russo One', sans-serif;
}

.left-container h2{
    font-size: 45px;
  color: yellow;
  font-family: 'Russo One', sans-serif;
}
.game{
    position:fixed;
    top : 0;
    left : 0;
    font-size: 30px;
}
/* Right Container */
.right-container{
    width:35%;
    height : 100vh;
     display : inline-flex;
    flex-direction: column;
    align-items : center;
    justify-content : center;
    position: absolute;
    color: black;
}
.box{
    border: 3px solid #81ff00d4;
    background:#020708d9;
    padding: 20px 65px;
    margin : 20px;
    border-top-left-radius: 30px;
    border-bottom-right-radius:30px ;
    cursor: pointer;
}
.box a{
    text-decoration: none;
    font-size: 25px;
    color: #99ff00de;
}
.box :hover{
    color: yellow;
}
.game, #play{
     font-weight:bold;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background: linear-gradient(90deg, #ff0000, #ffff00,#ff00f3, #0033ff, #ff00c4,#ff0000);
    background-size: 400%;
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
    animation : animate 10s linear infinite;
}
@keyframes animate{
    0%{
        background-position:0%;
    }
    100%{
        background-position: 400%;
    }
}
@media only screen and (min-width : 100px) and (max-width:877px){
    body{
        display : block;
    }
    .left-container{
        width : 100%;
        height : 50vh;
  }
    
    .left-container h1{
        font-size : 40px;
    
    }
    .right-container{
        display:block;
        width:100%;
        height : 50vh;
    }
    .box{
        padding:25px;
        text-align: center;
    }

}
   </style>
<link href="https://fonts.googleapis.com/css2?family=Nabla&family=Russo+One&display=swap" rel="stylesheet">
</head>
<body>
    
 <div class="left-container">
 <p class="game"> <a href="../gamexpress.php"> GameXpress</a></p>
    <h1 id="play" ></h1>
    <h2 id="color">SNAKE GAME</h2>

    <h2 id="score">POINTS: 
        <?php echo $_SESSION['score'] ?>
    </div>
    <div class="right-container">
       
        <div class="box">
            <a  target="_self" href="snake.php" target="_blank">PLAY AGAIN</a>
        </div>
        <div class="box">
            <a  target="_self" href="../index.html" target="_blank">GO TO MAIN MENU</a>
        </div>

        
        
    </div>
    
    <script >
    const text = "GAME OVER"; // The text to be animated
    const typingSpeed = 100; // Adjust the typing speed (in milliseconds)
    let charIndex = 0;  
    const typingEffect = document.getElementById("play");

function typeText() {
  if (charIndex < text.length) {
    typingEffect.textContent += text.charAt(charIndex);
    charIndex++;
   setTimeout(typeText, typingSpeed);

  }
}

// Start the typing animation
typeText();

    </script>
</body>
</html>