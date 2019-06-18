<?php
require "Game.php";
$game = new Game();
while($game->play());
$game->showResult();