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
        <title>update</title>
    </head>
    <body>
        <header>
            <h1>Update your details</h1>
        </header>
        <nav>
            <h3>Virtual learning platform</h3>
            <ul class="main-nav">
                <li class="active"><a href="Home.php">Go to home</a></li>
                <br>
                <li><a href="Videos.php">Uploaded Videos</a></li>
                <br>
                <li><a href="https://youtube.com">More videos at Youtube</a></li>
                <br>
            <form action="" method="post">
                <input id="btn" type="submit" name="btn_logout" value="Logout">
            </form>
            
        </nav>
        <br><br><br><br>
        <div id="center">
            <table align="center">
                <form action="" method="post">
                    <tr>
                    <td>Change Password</td>
                    <td><input type="password" name="txt_password" placeholder="Password" required></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="txt_confirm" placeholder="Confirm Password" required></td>
                </tr>
                <tr>
                    <td><input id="btn" type="submit" name="btn_submit" value="Submit">&nbsp;<input id="btn" type="reset" name="btn_reset" value="reset"></td>
                </tr>
                </form>
            </table>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
