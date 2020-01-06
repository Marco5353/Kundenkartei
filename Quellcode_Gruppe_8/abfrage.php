    <?php
        //conncets to the server and select database
        $con =  mysqli_connect('localhost','root','');
        mysqli_select_db($con, "kundenkartei");

        $ZNr = $_POST["zaehlerNr"];
        $res = mysqli_query($con, "SELECT * FROM zaehlerstaende WHERE zaehlerNr = '$ZNr'");
        $resall = mysqli_query($con, "SELECT * FROM zaehlerstaende ORDER BY zaehlerNr");
        $num = mysqli_num_rows($res);
        
        if($ZNr == "alle"){
            while($dsatz = mysqli_fetch_assoc($resall))
            {
            echo $dsatz["zaehlerNr"] . ",   " . $dsatz["zaehlerstand"] . ",   " . $dsatz["aeDatum"] . "<br />";
            }
        }

        while($dsatz = mysqli_fetch_assoc($res))
        {
        echo $dsatz["zaehlerNr"] . ",   " . $dsatz["zaehlerstand"] . ",   " . $dsatz["aeDatum"] . "<br />";
        }
    ?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Datenausgabe</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>

<style>
body{
  background-image: url("images/dark.jpg");
}
</style>
            <form action="abfrage.php" method="post">
            <p>Bitte geben sie nocheinmal ihre Zählernummer an:<input type="text" name="zaehlerNr">
            <input type="submit" value="Bestätigen!"/>
            </p>
            </form>
	
    <a href="login.php">Logout</a>
    <a href="auswahl.php">Home</a>

</body>
	
</html>