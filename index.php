<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di Password</title>
</head>
<body>
    <h1>Generatore di Password</h1>
    <form action="generate_password.php" method="post">
        <label for="length">Lunghezza della password:</label>
        <input type="number" id="length" name="length" min="1" required>
        <button type="submit">Genera Password</button>
    </form>
</body>
</html>