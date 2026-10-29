<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Form</h2>
    <form action="submit.php" method="POST">
        Name:<br>
        <input type="text" name="name" required>
        <br> <br>

        Email: <br>
        <input type="email" name="email" required>
        <br> <br> 

        Contact:<br>
        <textarea name="contact" required></textarea>
        <br> <br>

        <input type="submit" value="Submit">
</form>
    
</body>
</html>