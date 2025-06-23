<!DOCTYPE html>
<html>
<head>
        <title> Franciso's Pokédex </title>
        <style type="text/css">
        body {font-family: "Courier New", Courier, monospace;
                background-color: sandybrown;
                font-weight: thick;}
        p {font-family: "Courier New", Courier, monospace;
            font-size: 30px; font-weight: bold;
            padding:0.25cm; text-align:center;}
        table,td,th {border: 3px outset green;}
		td,th {padding:0.25cm; text-align:center;
                font-weight: bold;
                background-color: palegreen;}
        h1 {text-align: center; border:5px outset green;
            background-color: olivedrab;}
        h2 {text-align: center; border:5px outset green;
                background-color: olivedrab;}
        button {border: 3px outset green;
                width: 100%;
                background-color: olivedrab;
                font-size: 15px;
                font-family: "Courier New";}
        .box-one {background:papayawhip; width:100%; height:10%;}
        .box-two {background:papayawhip; width:100%; height:65%;}
        .box-three {background:papayawhip; width:100%; height:25%;}
        </style>
    </head>
    <body>
        <h2> New Pokémon Team Data </h2>
        <table border = "1">
            <tr>
                <th>Trainer Name</th>
                <th>Pokemon #1</th>
                <th>Level</th>
                <th>Pokemon #2</th>
                <th>Level</th>
                <th>Pokemon #3</th>
                <th>Level</th>
                <th>Pokemon #4</th>
                <th>Level</th>
                <th>Pokemon #5</th>
                <th>Level</th>
                <th>Pokemon #6</th>
                <th>Level</th>
            </tr>
        
        <?php
        if(!$_POST)
            die("<p> No form data </p>");
        $Pok_1 = $_POST['Pok_1'];
        $Pok_1_lvl = $_POST['Pok_1_lvl'];
        $Pok_2 = $_POST['Pok_2'];
        $Pok_2_lvl = $_POST['Pok_3_lvl'];
        $Pok_3 = $_POST['Pok_3'];
        $Pok_3_lvl = $_POST['Pok_4_lvl'];
        $Pok_4 = $_POST['Pok_4'];
        $Pok_4_lvl = $_POST['Pok_4_lvl'];
        $Pok_5 = $_POST['Pok_5'];
        $Pok_5_lvl = $_POST['Pok_5_lvl'];
        $Pok_6 = $_POST['Pok_6'];
        $Pok_6_lvl = $_POST['Pok_6_lvl'];

        $db = new mysqli("localhost","root","","FranPokedex");
            if($db->connect_errno)
                die("<p>Unable to Connect to Database</p>");
        
        $query = "INSERT INTO pokemon_team VALUES(NULL,'$Pok_1', '$Pok_1_lvl',
                    '$Pok_2', '$Pok_2_lvl', '$Pok_3', '$Pok_3_lvl', '$Pok_4', '$Pok_4_lvl',
                    '$Pok_5', '$Pok_5_lvl', '$Pok_6', '$Pok_6_lvl')";
        echo "<p>$query</p>";

        $result = $db->query($query);
        if($result == FALSE)
            echo "<p>Query Error: " . $db->error . "</p>";
        else 
            echo "<p> New Trainer Added to the Database! </p>";

        echo "<br>";

        $query2 = "SELECT trainer.Trainer_Name, pokemon_team.Pok_1, pokemon_team.Pok_1_lvl, pokemon_team.Pok_2, pokemon_team.Pok_2_lvl, pokemon_team.Pok_3, pokemon_team.Pok_3_lvl, 
                        pokemon_team.Pok_4, pokemon_team.Pok_4_lvl, pokemon_team.Pok_5, pokemon_team.Pok_5_lvl, pokemon_team.Pok_6, pokemon_team.Pok_6_lvl
                        FROM pokemon_team, trainer
                        WHERE pokemon_team.Train_ID = trainer.Trainer_ID";
            $result2 = $db->query($query2);
            if($result2 == FALSE)
                echo "<p> Query Error: " . $db->error . "</p>";
            else
            {
                while($row=$result2->fetch_assoc() )
                {
                    echo "<tr>";
                    echo "<td>" . $row['Trainer_Name'] . "</td>";
                    echo "<td>" . $row['Pok_1'] . "</td>";
                    echo "<td>" . $row['Pok_1_lvl'] . "</td>";
                    echo "<td>" . $row['Pok_2'] . "</td>";
                    echo "<td>" . $row['Pok_2_lvl'] . "</td>";
                    echo "<td>" . $row['Pok_3'] . "</td>";
                    echo "<td>" . $row['Pok_3_lvl'] . "</td>";
                    echo "<td>" . $row['Pok_4'] . "</td>";
                    echo "<td>" . $row['Pok_4_lvl'] . "</td>";
                    echo "<td>" . $row['Pok_5'] . "</td>";
                    echo "<td>" . $row['Pok_5_lvl'] . "</td>";
                    echo "<td>" . $row['Pok_6'] . "</td>";
                    echo "<td>" . $row['Pok_6_lvl'] . "</td>";
                    echo "</tr>";
                }
            }
            mysqli_close($db);
            ?>
        </table>
        <h2> <a href="addpokemonteams.php"> Return to Add Pokémon Team Page </a></h2>
    </body>
</html>