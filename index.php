
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    hola 
    <form action="Welcome.php" method="POST">
Name: <input type="text" name="name"  pattern="[A-Z|a-z|ñ|Ñ|ü|Ü|à|À|é|É|í|Í|ó|Ó|ú|Ú]"  max="10" minlength="5"><br>
edad: <input type="text" name="edad" pattern="[1-9]{1,99}"><br>
<input type="submit">
</form>
</body>
</html>