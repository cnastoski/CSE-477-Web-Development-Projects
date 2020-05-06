<?php
require 'format.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Wumpus Killed You</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>

<?php echo present_header("Stalking the Wumpus"); ?>

<div class="content">
    <figure class="main-pic"><img src="images/wumpus-wins.jpg" width="600" height="325" alt="The wumpus"> </figure>

    <h1>You died and the Wumpus ate your brain!</h1>

    <nav class="botnav">
        <p><a href="welcome.php">New Game</a></p>
    </nav>
</div>

</body>
</html>