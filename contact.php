<?php
/**
 * Created by PhpStorm.
 * User: Grunkzilla
 * Date: 7/10/2018
 * Time: 11:13 PM
 */
?>

<html>

    <head>

        <meta charset="utf-8">
        <title>Contact</title>

    </head>

    <header>

        <div id="nav_bar">

            <ul>

                <li><a href="home_page.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>

            </ul>

        </div>

    </header>

    <body>

        <div>

            <form action="mail.php" method="post">

                <p>Name</p> <input type="text" name="name"><br />
                <p>Email</p> <input type="text" name="Email"><br />
                <p>Message</p> <textarea name="message" rows="10" cols="15"></textarea><br />
                <input type="submit" value="send"><input type="reset" value="clear">

            </form>

        </div>

    </body>

    <footer>



    </footer>

</html>