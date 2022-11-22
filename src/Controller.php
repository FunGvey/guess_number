<?php
namespace FunGvey\guess_number\Controller;
use function FunGvey\guess_number\View\showGame;

function startGame(){
   echo "Game started" .PHP_EOL;
   showGame();
}
?>