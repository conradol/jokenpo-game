<?php

require __DIR__ . '/vendor/autoload.php';

use JokenpoGame\Jokenpo;

//Create a new game instance and play
try {
    $options = getopt(null, ['player1:', 'player2:']);

    if (empty($options['player1'])) {
        echo 'Inform the player 1 option, using --player1 [rock, paper, scissors]';
        exit;
    }

    if (empty($options['player2'])) {
        echo 'Inform the player 2 option, using --player2 [rock, paper, scissors]';
        exit;
    }

    $jokenpo = new Jokenpo();

    echo $jokenpo->play($options['player1'], $options['player2']);
    
} catch (Exception $e) { 
    echo $e->getMessage();
}
