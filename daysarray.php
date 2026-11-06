<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Days of the week array">
    <meta name="keywords" content="PHP, arrays">
    <meta name="author" content="Minna Albadri">
    <title>Days Array</title>
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>
    <?php
        // Days of the week in English
        $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        echo "<p>The days of the week in English are:<br>", implode(", ", $days), ".</p>";

        // Same array, now holding the French names
        $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
        echo "<p>The days of the week in French are:<br>", implode(", ", $days), ".</p>";
    ?>
</body>
</html>