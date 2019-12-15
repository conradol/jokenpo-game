# Jokenpo Game

Jokenpo is a Japanese game where two players choose one of three possible items: Rock, Paper or Scissors.

This app is a judge of Jokenpo who given the play of the two players informs the outcome of the match.
The rules are as follows:

   * Rock draws with Rock and wins Scissors
   * Scissors draws with Scissors and wins Paper
   * Paper draws with Paper and wins Rock

### Prerequisites
[PHP >= 7.2](https://www.php.net/manual/en/install.php)

### Installing

Access the project root path
```
cd project_path
```
Install dependencies

```
php composer.phar install
```

### Running the tests

```
vendor/bin/phpunit tests/

```

## Utilization

Access the project root path
```
cd project_path
```

The script accept two parameters:
  * --player1 [rock, paper or scissors]
  * --player2 [rock, paper or scissors]

Example:

```
php play.php --player1 rock --player2 paper
```
This should return
```
Paper curls rock. Player 2 wins!
```
