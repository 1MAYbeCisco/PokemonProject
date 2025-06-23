<!DOCTYPE html>
<html>
    <head>
        <title> Pokémon Typings </title>
        <style>
        body {font-family: "Courier New", Courier, monospace;}
        </style>
    </head>
    <body>
    <h2> Pokemon Typings </h2>
        <?php
        $db = new mysqli("localhost","root","","FranPokedex");
        if($db->connect_errno)
            die("<p>Unable to Connect to Database</p>");

        $query = "SELECT * FROM TYPINGS";
        
        ?>
        <h2> <a href="FranPokedex.php"> Return to Home Page </a></h2>
    </body>
</html>