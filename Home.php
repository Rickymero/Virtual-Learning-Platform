<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Style.css">
        <title>Home</title>
    </head>
    <body>
        <header>
            <h1>Welcome to Virtual Learning Platform</h1>
        </header>
        
        <nav>
            <h3>Virtual learning platform</h3>
            <ul class="main-nav">
                <li class="active"><a href="Update.php">Update personal details</a></li>
                <br>
                <li><a href="Videos.php">Uploaded Videos</a></li>
                <br>
                <li><a href="https://youtube.com">More videos at Youtube</a></li>
                <br>
                <form action="index.php" method="post">
                <input id="btn" type="submit" name="btn_logout" value="Logout">
            </form>
            
        </nav>
        <div id="center">
            <video src="C:\Users\sebet\Videos\Shield Advert." controls="controls" width="650px">
            </video>
        </div>
        <div id="Right">
            <h2>Comment Section</h2>
            <textarea name="comment_section" rows="8" cols="25">
                   
            </textarea><br>
            <h3>Upload a file here</h3>
            <input type="file" name="Upload " value="" />
            
        </div>
        <?php
        // put your code here
        if(isset($POST["btn_logout"]))
        {
            header("location:index.php");
            
        }
        ?>
    </body>
</html>
