    <?php
        //conncets to the server and select database
        $con =  mysqli_connect('localhost','root','');
        mysqli_select_db($con, "kundenkartei");

        $zaehlerNR = $_POST["zaehlernummer"];
        $zaehlerstand = $_POST["zaehlerstand"];
        $datum = date("d.m.Y");
        

        if($zaehlerstand == "" or $zaehlerNR == ""){
            echo "Du hast keinen Zählerstand angegeben!";
        }else{
            $eintrag = "INSERT INTO zaehlerstaende
            (zaehlerNR, zaehlerstand, aeDatum)
            VALUES 
            ('$zaehlerNR', '$zaehlerstand', '$datum')";
            $eintragen = mysqli_query($con, $eintrag);

            echo "Dein Zählerstand wurde übernommen!";
        }
?>