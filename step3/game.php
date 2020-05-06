<?php
require 'format.inc.php';
require 'wumpus.inc.php';

$room = 1; // The room we are in.
$birds = 7;  // Room with the birds
$cave = cave_array(); // Get the cave
$pits = array(3, 11, 13);    // Rooms with a bottomless pit
$wumpus = 16; // Room with the wumpus


if(isset($_GET['r']) && isset($cave[$_GET['r']]) ) {
    // We have been passed a room number
    $room = $_GET['r'];
    $room = bird_room_change($room,$birds);

    if(isset($_GET['a'])){
        if($_GET['a'] == $wumpus){
            header("Location: win.php");
            exit;
        }
    }
}

if(in_array($room, $pits) || $room == $wumpus) {
    header("Location: lose.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stalking the Wumpus</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>

<?php echo present_header("Stalking the Wumpus"); ?>

<div class="content">
    <figure class="main-pic"><img src="images/cave.jpg" width="600" height="325" alt="an empty cave">
    </figure>

    <div class="immersion">
        <?php
        echo '<p>' . date("g:ia l, F j, Y") . '</p>';
        ?>
        <div class="caption"><h2>You are in room <?php echo $room; ?></h2></div>
        <?php echo bird_adjacency($room, $birds); ?>
        <?php echo pit_adjacency($room, $pits); ?>
        <?php echo wumpus_adjacency($room, $wumpus); ?>
    </div>

    <div class="rooms">
        <div class="room">
            <figure class="room-pic"><img src="images/cave2.jpg" width="180" height="135" alt="A cave entrance"> </figure>
            <p><a href="game.php?r=<?php echo $cave[$room][0]; ?>"><?php echo $cave[$room][0]; ?></a></p>
            <p><a href="game.php?a=<?php echo $cave[$room][0]; ?> & r=<?php echo $room; ?>">Shoot Arrow</a></p>
        </div><div class="room">
            <figure class="room-pic"><img src="images/cave2.jpg" width="180" height="135" alt="A cave entrance"> </figure>
            <p><a href="game.php?r=<?php echo $cave[$room][1]; ?>"><?php echo $cave[$room][1]; ?></a></p>
            <p><a href="game.php?a=<?php echo $cave[$room][1]; ?> & r=<?php echo $room; ?>">Shoot Arrow</a></p>
        </div><div class="room">
            <figure class="room-pic"><img src="images/cave2.jpg" width="180" height="135" alt="A cave entrance"> </figure>
            <p><a href="game.php?r=<?php echo $cave[$room][2]; ?>"><?php echo $cave[$room][2]; ?></a></p>
            <p><a href="game.php?a=<?php echo $cave[$room][2]; ?> & r=<?php echo $room; ?>">Shoot Arrow</a></p>
        </div>
    </div>

    <h1>You have 3 arrows remaining.</h1>

</div>

</body>
</html>