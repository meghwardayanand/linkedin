<?php
    echo "<p>Welcome to <b style='color:blue;'>My<i style='color:red;'>Network</i></b>!</h2>";
    $baseUrl = 'http://' . $_SERVER['HTTP_HOST'];
    $targetPage = '/app/views/homepage.php';
    header('Location: ' . $baseUrl . $targetPage);
    exit;
?>
