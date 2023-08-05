<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMEXPRESS</title>
    <style>
        *{
    padding:0px;
    margin:0px;
    font-family: cursive;
        }
    body{
        background-color: #05052c;
        z-index: 0;
    }

/* Header */
#navbar{
    display:flex;
    align-items:center;
    position: relative;
    top:0px;
}
#navbar ul{
    display:flex;
}
#navbar::before{
    content:"";
    background-color:black;
    position: absolute;
    height: 100%;
    width: 100%;
    z-index:-1;
}
#navbar ul li{
    list-style:none;
    font-size:1.7rem;
}
#navbar ul li a{
   display:block;
   padding:20px 29px;
   border-radius:20px;
   color:white;
   text-decoration: none;
}
#navbar ul li a:hover{
    color:#00aeff;
    text-decoration: underline;
}

#login a{
    position: absolute;
    right:40px;
}

/* Home Section */
#home{
    display:flex;
    flex-direction: column;
    padding:5px 200px;
    height: 785px;
    justify-content: center;
    align-items: center;
}
#home::before{
    content:"";
    background: url('images/background.jpg') no-repeat center center/cover;
    position: absolute;
    height: 800px;
    width: 100%;
    z-index:-1;
    opacity: 0.99; 
} 
#home h1{
    color: white;
    text-align: center;
    font-size:100px;
    font-weight:bold;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.gameColor,.heading_second,.heading_first {
    font-size:70px;
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
    
    /* botton */
.btn{
    border: 2px solid blue;
    background-color: #ffffffa3;
    padding:6px 20px;
    margin:20px;
    font-size: 1.3rem;
    cursor: pointer;
    box-shadow : 0px 0px 10px 3px rgb(95, 95, 227);
}
.btn a{
    margin : 10px 0px;
    color : blue;
    text-decoration : none;
    font-size : 30px;
}

.btn:hover{
    color:black;
    background-color: #3e455fd4;
    width:40%;
}
@media only screen and (min-width : 200px) and (max-width:767px){

#navbar{
    flex-direction: column;
    align-items: start;
    justify-content: center;
    flex-wrap: wrap;
}
#navbar ul li a{
    font-size:1rem;
    padding:0px 7px;
}
#login{
    align-items: end;
    font-size:1rem;
    padding:0px 8px;
}
#login a{
    position : absolute;
    right : 5px;
}
/* Home Section */
#home{
    height:467px;
    padding:3px 13px;
    
}
#home::before{
    height: 480px;
}
#home h1{
    font-size: 40px;

}

.heading_first{
    font-size:23px;
}
.btn{
    font-size: 13px;
    padding:4px 8px;
}
.btn a{
    font-size: 13px;
}
   
}


    </style>

</head>
<body>
    <!-- Header Section -->
    <nav id="navbar">
        <ul>
            <li class="item gameColor" id=""><a href="">Game<span style="font-style: italic;">X</span>press</a></li>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#games">Menu</a></li>
            <li class="item" id="login"> <a href="signup/login.php">Login</a></li>
         </div>
        </ul>
    </nav>
    <!-- Home Section -->
    <section id="home">
        <h1>GAMEXPRESS</h1>
        <button class="btn"><a href="signup/login.php">PLAY GAMES</a></button>
    </section>
  
<script src="index.js" text="text/javascript"></script>
</body>
</html>