<?php

/**
* @package JokenpoGame
* @author Conrado Lemos <conrado.lemos@hotmail.com>
* @copyright 2019 Conrado Lemos
*/

namespace JokenpoGame;

use InvalidArgumentException;

class Jokenpo
{
    //Mapper of rules
    private $rules = [
        'rock' => [
            'win' => 'scissors',
            'msg' => 'Rock smashes scissors.'
        ],
        'paper' => [
            'win' => 'rock',
            'msg' => 'Paper curls rock.'
        ],
        'scissors' => [
            'win' => 'paper',
            'msg' => 'Scissors cut paper.'
        ]
    ];


    /**
     * Recieve the plays, apply the rules e return the result
     * @param string $player1 
     * @param string $player2
     * @return string
     */
    public function play(string $player1, string $player2)
    {
        $player1 = $this->__clearAndTransform($player1);
        $player2 = $this->__clearAndTransform($player2);

        $this->__isAValidOption($player1);
        $this->__isAValidOption($player2);
        
        //If both players play the same, then it's a draw
        if ($player1 == $player2) {
            return 'Draw!';
        }

        //If player1's play wins player2's play, player1 wins
        if ($this->rules[$player1]['win'] === $player2) {
            return $this->rules[$player1]['msg'] . ' Player 1 wins!';
        }

        //There was no draw and player1 didn't win, so player2 wins
        return $this->rules[$player2]['msg'] . ' Player 2 wins!';
    }

    /**
     * Remove spaces and transform to lowercase string
     * @param string value
     * @return string
     */
    private function __clearAndTransform(string $value)
    {
        return strtolower(trim($value));
    }

    /**
     * Verifiy if the passed value is a valid play
     * 
     * @param string value
     * @return bool 
     * @return void
     */
    private function __isAValidOption(string $value) 
    {
        $availableOptions = ['rock', 'paper', 'scissors'];

        if (!in_array($value, $availableOptions)) {
            throw new InvalidArgumentException($value . ' not is a valid option!');
        }

    }
}
