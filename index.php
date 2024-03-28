<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatApp</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<?php include_once "header.php"; ?>
<body>
<div class="wrapper">
    <section class="form signup">
        <header>ChatApp</header>
        <form action="#" method="post" enctype="multipart/form-data" autocomplete = "off">
            <div class="error-text"> </div>
            <div class="name-details">
            <div class="field input"> </div>
            </div>
            <div class="name-details">
                <div class="field input"> </div>
            </div>

            <div class= "field input"> 
            <label>Email Adres</label>
            <input type="text" name="email" placeholder="Voer je Email In" required>
            </div>

            <div class="field input">
                <label>Wachtwoord</label>
                <input type="password" name="password" placeholder="Voer Nieuw Wachtwoord in" required>
              <div class="field image">
                <label>Profiel Foto</label>
                <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                <div class="field button">
                <input type="submit" name="submit" value="Doorgaan Naar Chat">
    </form>
    <div class="link">Heb je al een account? <a href="login.php">Log Nu In</div>
    </section>
</div>
</body>
</html>