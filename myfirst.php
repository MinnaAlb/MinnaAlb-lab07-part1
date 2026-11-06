<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="PHP variables, arrays and operators">
    <meta name="keywords" content="PHP, variables, arrays, operators">
    <meta name="author" content="Minna Albadri">
    <title>Using PHP Variables, arrays and operators</title>
</head>
<body>
    <h1>PHP Variables, arrays and operators</h1>
    <?php
        // Declare and initialise the marks array
        $marks = array(85, 85, 95);
        // Modify the second element
        $marks[1] = 90;
        // Compute the average of the three marks
        $save = ($marks[0] + $marks[1] + $marks[2]) / 3;
        // Pass mark is 50
        if ($save >= 50)
            $status = "PASSED";
        else
            $status = "FAILED";
        // Double quotes so the variables are evaluated
        echo "<p>The average score is $save. You $status.</p>";
    ?>
</body>
</html>