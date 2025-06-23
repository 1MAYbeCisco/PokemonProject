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
        <h2> Enter in Your Own Pokémon Team: </h2>
        <form method="post" action="processpokemonteam.php">
        <table>
            <tr>
                <th>Pokémon #1: </th>
                <td><input type="number" name="Pok_1" /> </td>
            </tr>
            <tr>
                <th>Level(less than 100): </th>
                <td><input type="number" name="Pok_1_lvl" /> </td>
            </tr>
            <tr>
                <th>Pokémon #2: </th>
                <td><input type="number" name="Pok_2" /> </td>
            </tr>
            <tr>
                <th>Level(less than 100): </th>
                <td><input type="number" name="Pok_2_lvl" /> </td>
            </tr>
            <tr>
                <th>Pokémon #3: </th>
                <td><input type="number" name="Pok_3" /> </td>
            </tr>
            <tr>
                <th>Level(less than 100): </th>
                <td><input type="number" name="Pok_3_lvl" /> </td>
            </tr>
            <tr>
                <th>Pokémon #4: </th>
                <td><input type="number" name="Pok_4" /> </td>
            </tr>
            <tr>
                <th>Level(less than 100): </th>
                <td><input type="number" name="Pok_4_lvl" /> </td>
            </tr>
            <tr>
                <th>Pokémon #5: </th>
                <td><input type="number" name="Pok_5" /> </td>
            </tr>
            <tr>
                <th>Level(less than 100): </th>
                <td><input type="number" name="Pok_5_lvl" /> </td>
            </tr>
            <tr>
                <th>Pokémon #6: </th>
                <td><input type="number" name="Pok_6" /> </td>
            </tr>
            <tr>
                <th>Level(less than 100): </th>
                <td><input type="number" name="Pok_6_lvl" /> </td>
            </tr>
        </table>
        
        <input type="submit" value="Add Team" />

        </form>
        <h2> <a href="FranPokedex.php"> Return to Home Page </a></h2>
    </body>
</html>
