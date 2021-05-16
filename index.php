<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel = "stylesheet" href = "Style.css">
        <title>Login</title>
    </head>
    <body class="body">
        <h1>Virtual Learning Platform</h1>
        
        <br>
        <h2 align="center">Login Here</h2>
        <table align="center">
            <form action ="Home.php" method="POST" id="form">
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="txt_username" placeholder="Username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="txt_password" placeholder="Password" required></td>
                </tr>
                <tr>
                    <td><br><input class="btn2" type="submit" name="btn_submit" value="Submit"><input type="reset" name="btn_reset" value="reset"></td>
                </tr>
                
            </form>
        </table>
        <p align="center">Don't have an account? <a href='Registration.php'>Register Here</a></p>
        <?php
        // put your code here
        if(isset($POST["btn_submit"]))
        {
            header("location:Home.php");
            $username = isset($POST["txt_username"]) ? $POST["txt_username"] : "";
            $password = isset($POST["txt_password"]) ? $POST["txt_password"] : "";
            ?>
                
            <?php
        }
        ?>
        
    </body>
</html>
