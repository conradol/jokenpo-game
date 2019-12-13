<?php

require __DIR__ . '/vendor/autoload.php';

use JokenpoGame\Jokenpo;

//Create a new game instance and play
try {
    $jokenpo = new Jokenpo();
    echo $jokenpo->play('Paper ', ' scissors');
} catch (Exception $e) { 
    echo $e->getMessage();
}
