<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="inc/controller/registerhandler.inc.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" class="username" name="username">
        <label for="email">Email:</label>
        <input type="email" class="email" name="email">
        <label for="password">Password:</label>
        <input type="password" class="password" name="password">
        <input type="submit">
    </form>
</body>
</html>