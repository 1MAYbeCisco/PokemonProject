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
        <h2> Enter in Your Own Data </h2>
        <form method="post" action="processtrainer.php">
        <table>
            <tr>
                <th>Trainer Name: </th>
                <td><input type="text" name="Trainer_Name" /> </td>
            </tr>
            <tr>
                <th>Money: </th>
                <td><input type="number" name="Amt_Money" /> </td>
            </tr>
            <tr>
                <th>Pokédex Entries: </th>
                <td><input type="number" name="Pokedex_Ent" /> </td>
            </tr>
            <tr>
                <th>Number of Badges: </th>
                <td><input type="number" name="Num_Badges" /> </td>
            </tr>
            <tr>
                <th>Champion(Yes or No): </th>
                <td>
                    <select name="Champion">
                        <option value="Y">Y</option>
                        <option value="N">N</option>
                    </select>
                </td>
            </tr>
        </table>
        
        <input type="submit" value="Add Trainer" />

        </form>
        <h2> <a href="FranPokedex.php"> Return to Home Page </a></h2>
    </body>
</html>
