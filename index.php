<?php
$command = escapeshellcmd('python main.py');
$output = shell_exec($command);
echo "<p>\n";
echo $output . "\n";
echo "</p>";
?>