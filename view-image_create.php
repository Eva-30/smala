<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une image</title>
</head>
<body>
    <?php
echo (
    "<main>" . PHP_EOL
    ."<h1>Create User</h1>" . PHP_EOL
    ."<form method='post' action='?user-create-checkin'>" . PHP_EOL
    ."<input type='email' name='email' placeholder='email@adress.com' required>" . PHP_EOL
    ."<input type='password' name='password' placeholder='Type a password ...' required>" . PHP_EOL
    ."<input type='submit' value='Create'>" . PHP_EOL
    ."</form>" . PHP_EOL
    ."</main>";
)

    ?>
</body>
</html>