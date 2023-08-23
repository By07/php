<?php

if(isset($_POST['number'])) {
    $number = $_POST['number'];
    echo "<h2>Table of $number:</h2>";
    echo "<ul>";
    for($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        echo "<li>$number x $i = $result</li>";
    }
    echo "</ul>";
}

?>

<form method="POST">
    <label for="number">Enter a number:</label>
    <input type="number" name="number" id="number" required>
    <button type="submit">Generate Table</button>
</form>