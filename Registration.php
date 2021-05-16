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
        <title>Registration</title>
    </head>
    <body class="body">
        <h1>New Student, Register Here</h1>
        <br><br><br><br><br>
        <table align="center">
            <form action ="index.php" method="POST">
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="txt_username" placeholder="Username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="txt_password" placeholder="Password" required></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="txt_confirm" placeholder="Confirm Password" required></td>
                </tr>
                
                <tr>
                    <td><br><br><input id="button" type="submit" name="btn_submit" value="Submit"> <input id="button" type="reset" name="btn_reset" value="reset"></td>
                </tr>
                
            </form>
        </table>
        <?php
        // put your code here
        if(isset($POST["btn_submit"]))
        {
            header("location:index.php");
            $username = isset($POST["txt_username"]) ? $POST["txt_username"] : "";
            $password = isset($POST["txt_password"]) ? $POST["txt_password"] : "";
            ?>
                
            <?php
        }
        ?>
        ?>
    </body>
</html>
