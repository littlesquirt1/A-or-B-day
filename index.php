<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A or B Day?</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function($) {
            $("#txt").load("script.php");
        });
    </script>
  </head>

  <body>
      <div class="center">
        <div class="stage"> <div class="dot-pulse"></div> </div>
        <p style="font-family: &quot;Fredoka One&quot;, cursive; font-size:50px; text-align:center;" id="txt">
        </p>
    </div>
  </body>
</html>