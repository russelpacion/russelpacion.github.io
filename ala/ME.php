<?php
$date= date("Y");

?>

<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale= 1.0">
    <link rel="stylesheet" href="ako.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>My Life</title>
    </head>
    <body>
        
  
    <div class="m" id="menu">
        <h1 class="logo"><i class="fa-solid fa-heart-pulse">&nbsp;</i>My<span>Life.</span></h1>
        
        <ul>
            <li><a href="#bg">Home</a></li>
            <li><a href="#">FAQ<i class="fas fa-caret-down"></i></i></a>
            <div class="submenu">
                <ul>               
                    <li><a href="#me">MYSELF</a></li>
                    <li><a href="#hobby">HOBBY</a></li>
                </ul>
            </div>
            </li>
            <li><a href="#send">Anonymous Message</a></li>
        </ul>
    </div>
    <div id="bg">
        &nbsp;
    </div>
    <div class="content">
        <h2>Hello, Guys!<br><span class="change"></span></h2>
        <h1>You've got a friend in me!</h1>
    
    </div>
    <div class="ano">
        <a href=" https://www.facebook.com/russel.pacion.9/"><span></span><i class="fa-solid fa-thumbs-up">&nbsp;&nbsp;&nbsp;</i>Facebook</a>
        <a href="https://youtube.com/channel/UC1J-4wJH0GUpWysg1MR7E9A"><span></span> <i class="fa-brands fa-youtube">&nbsp;&nbsp;&nbsp;</i>Youtube</a>
    </div>
    <div class="date">
        <p>&copy; <?php echo $date?> RCP - All rights reserved.</p>
    </div>
<section id="me">
    <div class="about">
        <img src="pusa.png" alt="">
        <div class="text">
        <h2 class="heading">ABOUT<span>&nbsp;&nbsp;ME</span></h2>
        <h5>College student & <span>MEOWDY</span></h5>
        <p class="p">I am Russel Pacion, a second year student from Our Lady of Fatima University-Pampanga Campus.
        I am 20 years old and I am currently taking Bachelor of Science in Information Technology. I pursue this course 
        because of the good market and I also want to be a software engineer someday. I love animals specially dog,cats
        and bird. I love color black and my favorite food is the ultimate adobo made by my father.</p>
    
            </section>
        </div>
    </div>
    </section>


    <div class="gawa" id="hobby">
         <div class="txt">
            <h2 class="text">WHAT I<span>&nbsp;&nbsp;DO</span></h2>
            <p>I do some dance on tiktok.I do play basketball. I do play mobile games. 
               I do play with my cat.<br> Here some random videos for you to see what I do in my life.</p>
        </div> 
        <div class="vide">
        <video src="tiktok.mp4" controls="controls"></video> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <video src="ml.mp4" controls="controls"></video>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <video src="bball.mp4" controls="controls"></video>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <video src="cat.mp4" controls="controls"></video> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div></div> 

    <div class="message" id="send">
        
        <div class="sint">
        <form action="akoto.php" method="post">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your identity is hidden..."></textarea>
        
        <div class="sent">
            
            <button><i class="fa-solid fa-paper-plane"></i>&nbsp;&nbsp;Send</button>
            
        </div></form>
    </div>
    </div>
    <div class="bubbles">
        <img src="ano.png" alt="">
        <img src="ano.png" alt="">
        <img src="ano.png" alt="">
        <img src="ano.png" alt="">
        <img src="ano.png" alt="">
        <img src="ano.png" alt="">
        <img src="ano.png" alt="">
        <img src="ano.png" alt="">
        <img src="ano.png" alt="">
        <img src="ano.png" alt="">
    </div>
</body>
</html>