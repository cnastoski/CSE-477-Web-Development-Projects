<?php
require 'format.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Stalking the Wumpus</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>


<?php echo present_header("Stalking the Wumpus"); ?>

<div class="content">
    <figure class="main-pic"><img src="images/cave-wumpus.jpg" width="600" height="325" alt="The wumpus"> </figure>

    <h1>Welcome to <strong>Stalking the Wumpus</strong></h1>

    <nav class="botnav">
        <p><a href="instructions.php">Instructions</a></p>
        <p><a href="game.php">Start Game</a> </p>
    </nav>
</div>

</body>
</html>