<?php
use PHPUnit\Framework\TestCase;
use JokenpoGame\Jokenpo;

class JokenpoTest extends TestCase
{
    public function test_draw()
    {
        $jokenpo = new Jokenpo();

        $player1 = 'rock';
        $player2 = 'rock';

        $expected = 'Draw!';
        $result = $jokenpo->play($player1, $player2);

        $this->assertEquals($expected, $result);
    }

    public function test_player1_wins_with_rock()
    {
        $jokenpo = new Jokenpo();

        $player1 = 'rock';
        $player2 = 'scissors';

        $expected = 'Rock smashes scissors. Player 1 wins!';
        $result = $jokenpo->play($player1, $player2);

        $this->assertEquals($expected, $result);
    }

    public function test_player1_wins_with_paper()
    {
        $jokenpo = new Jokenpo();

        $player1 = 'paper';
        $player2 = 'rock';

        $expected = 'Paper curls rock. Player 1 wins!';
        $result = $jokenpo->play($player1, $player2);

        $this->assertEquals($expected, $result);
    }

    public function test_player1_wins_with_scissors()
    {
        $jokenpo = new Jokenpo();

        $player1 = 'scissors';
        $player2 = 'paper';

        $expected = 'Scissors cut paper. Player 1 wins!';
        $result = $jokenpo->play($player1, $player2);

        $this->assertEquals($expected, $result);
    }

        public function test_player2_wins_with_rock()
    {
        $jokenpo = new Jokenpo();

        $player1 = 'scissors';
        $player2 = 'rock';

        $expected = 'Rock smashes scissors. Player 2 wins!';
        $result = $jokenpo->play($player1, $player2);

        $this->assertEquals($expected, $result);
    }

    public function test_player2_wins_with_paper()
    {
        $jokenpo = new Jokenpo();

        $player1 = 'rock';
        $player2 = 'paper';

        $expected = 'Paper curls rock. Player 2 wins!';
        $result = $jokenpo->play($player1, $player2);

        $this->assertEquals($expected, $result);
    }

    public function test_player2_wins_with_scissors()
    {
        $jokenpo = new Jokenpo();

        $player1 = 'paper';
        $player2 = 'scissors';

        $expected = 'Scissors cut paper. Player 2 wins!';
        $result = $jokenpo->play($player1, $player2);

        $this->assertEquals($expected, $result);
    }
    

}