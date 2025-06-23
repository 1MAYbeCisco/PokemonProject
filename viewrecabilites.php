<!DOCTYPE html>
<html>
    <head>
        <title> Pokémon Received Abilities </title>
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

    <h2> Input: </h2>
		<form method="post" action="viewrecabilites.php">
			<p> Search for a Pokémon and it's Abilities:
				<input type="text" name="searchvalue" />
				<input type="submit" name="submit" />
				<input type="reset" name="reset" />
			</p>
		</form>
		<hr />

    <h2> Pokémon Received Abilities </h2>
        
        <table border = "1">
            <tr>
                <th>Pokemon Number</th>
                <th>Pokemon Name</th>
                <th>Ability 1</th>
                <th>Ability 2</th>
                <th>Hidden Ability</th>
            </tr>
        
            <?php
            $db = new mysqli("localhost","root","","FranPokedex");
            if($db->connect_errno)
                die("<p>Unable to Connect to Database</p>");

            if($_POST) {
                $searchvalue = $_POST['searchvalue'];
                $query = "SELECT received_abl.Num_Poke, pokemon.Pokemon_Name, received_abl.Abil_1, 
                                received_abl.Abil_2, received_abl.Hidden_Abil 
                            FROM received_abl, pokemon 
                            WHERE received_abl.Num_Poke = pokemon.Pokemon_Number
                            AND Pokemon_Name LIKE '%" . $searchvalue . "%' ORDER BY Pokemon_Number ASC";
            }
            else {
                $query = "SELECT received_abl.Num_Poke, pokemon.Pokemon_Name, received_abl.Abil_1, 
                                received_abl.Abil_2, received_abl.Hidden_Abil 
                        FROM received_abl, pokemon WHERE received_abl.Num_Poke = pokemon.Pokemon_Number";
            }
            
            $result = $db->query($query);
            if($result == FALSE)
                echo "<p> Query Error: " . $db->error . "</p>";
            else
            {
                while($row=$result->fetch_assoc() )
                {
                    echo "<tr>";
                    echo "<td>" . $row['Num_Poke'] . "</td>";
                    echo "<td>" . $row['Pokemon_Name'] . "</td>";
                    echo "<td>" . $row['Abil_1'] . "</td>";
                    echo "<td>" . $row['Abil_2'] . "</td>";
                    echo "<td>" . $row['Hidden_Abil'] . "</td>";
                    echo "</tr>";
                }
            }
            mysqli_close($db);
            ?>
        </table>
        <h2> <a href="FranPokedex.php"> Return to Home Page </a></h2>
    </body>
</html>