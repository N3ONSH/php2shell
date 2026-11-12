<?php
echo "<h1>PHP Security Lab</h1>";

echo "<p>PHP Version: " . PHP_VERSION . "</p>";
echo "<p>Operating System: " . PHP_OS . "</p>";
echo "<p>Current Directory: " . getcwd() . "</p>";

echo "<h2>Command execution: configuration</h2>";

$disabled = ini_get('disable_functions');

echo "<p>Disabled functions: " . htmlspecialchars($disabled ?: "None") . "</p>";
?>
