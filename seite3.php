<html>
<head>
	<title>Wasserwerke Eingabe Zählerstand</title>
</head>

<body id="body">
    <?php
        $verbindung = phpmyadmin_connect("localhost", "kundenkartei", "Passwort")
        or die ("Fehler im System");

        phpmyadmin_select_db("kundenkartei")
        or die ("Verbindung zur Datenbank war nicht möglich...");

        $kundenID = $_POST["kundenID"];

        $datum = date("d.m.Y");
        $uhrzeit = date("H:i:s");

        if($zaehlerstand == ""){

            $abfragealle = "SELECT * FROM kundenkartei ORDER BY nachname";
            $ergebnisalle = phpmyadmin_query($abfragealle);

            while($row = phpmyadmin_fetch_object($ergebnisalle)){
                ?>
                <p>
                Nachname: <?php echo $row->nachname; ?></b>
                Zählerstand: <?php echo $row->zaehlerstand; ?></b>
                Datum: <?php echo $row->datum; ?></b>
                Uhrzeit: <?php echo $row->uhrzeit; ?></b>
                </p>
                <hr />
                <?php
            }

        }

        if($zaehlerstand == '$kundenID'){

            $abfrage = "SELECT * FROM kundenkartei ORDER BY nachname";
            $ergebnis = phpmyadmin_query($abfrage);

            while($row = phpmyadmin_fetch_object($ergebnis)){
                ?>
                <p>
                Nachname: <?php echo $row->nachname; ?></b>
                Zählerstand: <?php echo $row->zaehlerstand; ?></b>
                Datum: <?php echo $row->datum; ?></b>
                Uhrzeit: <?php echo $row->uhrzeit; ?></b>
                </p>
                <hr />
                <?php
            }

        }
    ?>
</body>
	
</html>