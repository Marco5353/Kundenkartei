<html>
<head>
	<meta charset="UTF-8">
	<title>Wasserwerke Eingabe Zählerstand</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

<style>
body{
  background-image: url("images/dark.jpg");
}
</style>

    <form action="processZae.php" method="post">
            <p>Bitte geben sie nocheinmal ihre Zählernummer an, danke:</p><input type="text" name="zaehlernummer"></br>
            <p>Bitte geben sie den Zählerstand ein:</p><input type="text" name="zaehlerstand">
            <input type="submit" value="Bestätigen!"/>
            
    </form>
	
</body>
	
</html>