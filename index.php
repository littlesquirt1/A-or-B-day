<?php
$command = escapeshellcmd('python main.py');
$output = shell_exec($command);
echo "<p>\n";
echo htmlspecialchars($output)."\n";
echo "</p>";
?>