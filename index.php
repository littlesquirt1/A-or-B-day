<?php
$command = escapeshellcmd('python main.py');
$output = shell_exec($command);

echo '<!DOCTYPE html>' . "\n";
echo '<html lang="en">' . "\n";
echo '<head>' . "\n";
echo '<meta charset="UTF-8">' . "\n";
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">' . "\n";
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">' . "\n";
echo '<title>A or B Day?</title>' . "\n";
echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
echo '<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">';
echo '</head>' . "\n";
echo '<body>' . "\n";
echo '<p style="font-family: &quot;Luckiest Guy&quot;, cursive; font-size:50px;">' . "\n";
echo $output . "\n";
echo '</p>' . "\n";
echo '</body>' . "\n";
echo '</html>';
?>
