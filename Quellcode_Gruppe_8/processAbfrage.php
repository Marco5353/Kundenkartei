<html>
<head>
	<title>Wasserwerke Eingabe Zählerstand</title>
</head>

<body id="body">
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
</body>
	
</html>