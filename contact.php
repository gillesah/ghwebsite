<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="icon" type="image/png" href=" images/favicon.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>
</head>
<?php include 'header.php' ?>

<body>
    <main id="content">
        <h1>Contact</h1></br>
        <form method="post" action="process_form.php">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
        <br>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <input type="submit" value="Send">
    </form>
       



    </main>
</body>
<?php include 'footer.php' ?>

</html>