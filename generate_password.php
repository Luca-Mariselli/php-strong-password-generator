<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di Password</title>
</head>
<body>
    <h1>La tua password generata</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $length = intval($_POST["length"]);
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; // Caratteri consentiti
        $charactersLength = strlen($characters);
        $password = "";

        for ($i = 0; $i < $length; $i++) {
            $randomIndex = rand(0, $charactersLength - 1);
            $password .= $characters[$randomIndex];
        }

        echo "<p>Password generata: $password</p>";
    } else {
        echo "<p>Errore nella richiesta.</p>";
    }
    ?>
    <a href="index.php">Torna indietro</a>
</body>
</html>