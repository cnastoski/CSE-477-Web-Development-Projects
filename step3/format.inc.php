<?php

function present_header($title) {
    $html = <<<HTML
<header>
<nav class = "topnav"><p><a href="welcome.php">New Game</a>
<a href="game.php">Game</a>
<a href="instructions.php">Instructions</a></p></nav>
<h1>$title</h1>
</header>
HTML;

    return $html;
}

