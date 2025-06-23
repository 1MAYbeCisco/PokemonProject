<!DOCTYPE html>
<html>
    <head>
        <title> Routes </title>
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
    <h2> Routes </h2>
        
        <table border = "1">
            <tr>
                <th>Route ID</th>
                <th>Route Name</th>
                <th>Region</th>
                <th>Route Environment</th>
            </tr>
        
            <?php
            $db = new mysqli("localhost","root","","FranPokedex");
            if($db->connect_errno)
                die("<p>Unable to Connect to Database</p>");

            $query = "SELECT * FROM routes";
            $result = $db->query($query);
            if($result == FALSE)
                echo "<p> Query Error: " . $db->error . "</p>";
            else
            {
                while($row=$result->fetch_assoc() )
                {
                    echo "<tr>";
                    echo "<td>" . $row['Route_ID'] . "</td>";
                    echo "<td>" . $row['Route_Name'] . "</td>";
                    echo "<td>" . $row['Region_Num'] . "</td>";
                    echo "<td>" . $row['Route_Environment'] . "</td>";
                    echo "</tr>";
                }
            }
            mysqli_close($db);
            ?>
        </table>
        <h2> <a href="FranPokedex.php"> Return to Home Page </a></h2>
    </body>
</html>