<?php

/**
 * Create an array that represents the cave
 * @returns Array
 */
function cave_array() {
    $cave = array(1 => array(5, 6, 2),
                2 => array(1, 8, 3),
                3 => array(2,10,4),
                4 => array(3,12,5),
                5 => array(4,14,1),
                6 => array(15,1,7),
                7 => array(16,8,6),
                8 => array(2,9,7),
                9 => array(8,10,17),
                10 => array(9,3,11),
                11 => array(10,18,12),
                12 => array(11,4,13),
                13 => array(12,19,14),
                14 => array(13,5,15),
                15 => array(14,20,6),
                16 => array(17,20,7),
                17 => array(18,16,9),
                18 => array(17,19,11),
                19 => array(18,13,20),
                20 => array(19,16,15));
    return $cave;
}

function bird_adjacency($room, $birds){
    $cave = cave_array(); // Get the cave

    if (in_array($birds,$cave[$room])){
        return "<h2>You hear birds!</h2>";
    }

    else{
        return "<h2>&nbsp;</h2>";
    }

}

function bird_room_change($room, $birds){
    if ($room == $birds){
        $room = 10;
    }
    return $room;
}

function pit_adjacency($room , $pits){
    $cave = cave_array(); // Get the cave

    if (!empty(array_intersect($pits, $cave[$room]))){
        return "<h2>You feel a draft!</h2>";
    }

    else{
        return "<h2>&nbsp;</h2>";
    }

}

function wumpus_adjacency($room, $wumpus){
    $cave = cave_array(); // Get the cave

    if (in_array($wumpus,$cave[$room])){
        return "<h2>You smell a Wumpus!</h2>";
    }

    for($i=0; $i<=2; $i++){
        $room_to_check = $cave[$room][$i];
        if (in_array($wumpus,$cave[$room_to_check])){
            return "<h2>You smell a Wumpus!</h2>";
        }
    }
    return "<h2>&nbsp;</h2>";
}