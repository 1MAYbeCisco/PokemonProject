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
        <h2> New Trainer Data </h2>
        <table border = "1">
            <tr>
                <th>Trainer ID</th>
                <th>Trainer Name</th>
                <th>Money</th>
                <th>Pokédex Entries</th>
                <th>Number of Badges</th>
                <th>Champion</th>
            </tr>
        
        <?php
        if(!$_POST)
            die("<p> No form data </p>");
        $Trainer_Name = $_POST['Trainer_Name'];
        $Amt_Money = $_POST['Amt_Money'];
        $Pokedex_Ent = $_POST['Pokedex_Ent'];
        $Num_Badges = $_POST['Num_Badges'];
        $Champion = $_POST['Champion'];

        $db = new mysqli("localhost","root","","FranPokedex");
            if($db->connect_errno)
                die("<p>Unable to Connect to Database</p>");
        
        $query = "INSERT INTO trainer VALUES(NULL,'$Trainer_Name', '$Amt_Money',
                    '$Pokedex_Ent', '$Num_Badges', '$Champion')";
        echo "<p>$query</p>";

        $result = $db->query($query);
        if($result == FALSE)
            echo "<p>Query Error: " . $db->error . "</p>";
        else 
            echo "<p> New Trainer Added to the Database! </p>";

        echo "<br>";

        $query2 = "SELECT * FROM trainer";
            $result2 = $db->query($query2);
            if($result2 == FALSE)
                echo "<p> Query Error: " . $db->error . "</p>";
            else
            {
                while($row=$result2->fetch_assoc() )
                {
                    echo "<tr>";
                    echo "<td>" . $row['Trainer_ID'] . "</td>";
                    echo "<td>" . $row['Trainer_Name'] . "</td>";
                    echo "<td>" . $row['Amt_Money'] . "</td>";
                    echo "<td>" . $row['Pokedex_Ent'] . "</td>";
                    echo "<td>" . $row['Num_Badges'] . "</td>";
                    echo "<td>" . $row['Champion'] . "</td>";
                    echo "</tr>";
                }
            }
        
        mysqli_close($db);
        ?>
        </table>
        <h2> <a href="addtrainers.php"> Return to Add Trainer Page </a></h2>
    </body>
</html>