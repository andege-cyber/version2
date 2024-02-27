<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <h1>Azubi Docker Form</h1>
    <form action="index.php" method="POST">
        <div class="form-group">
            <label for="">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <br/>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <br/>

        <div class="form-group">
            <label for="">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <br/>

        <div>
            <input class="button" type="submit" value="Submit">
        </div>
        

    </form>
</body>
</html>