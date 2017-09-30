# Chess Moves

This project was created as a code challenge for a job application. Here are the requirements:

  In the software language of your choice, and given standard algebraic notation of a chess board (see below), write code that will:
#### Accept two parameters:
 Type of chess piece (Queen, Rook, Knight)
 Current position on a chess board (for example: d2)
#### Return:
 A list of all the potential board positions the given piece could advance to, with one move, from the given position, with the assumption there are no other pieces on the board.
#### Rules:
 You do not have to implement the solution for every piece type, but the solution must implement at least the following: Queen, Rook and Knight.
 You may not use any external/non-core libraries: use only primitives and built-ins for the chosen language.
 Please provide test coverage for your work.
#### Example:
If the code is passed:  “knight, d2”
```
$ chessercise.py -piece KNIGHT -position d2
```
The output should be:  “b1, f1, b3, f3,c4, e4"

## My Implementation
All of the above requirements were met. In addition, I implemented King and Bishop. I did not implement Pawn because that requires knowing the color of the piece to generate possible moves. Also, because the code has no history of moves I did not implement Castling for the King.

The parameters are case insensitive and the relative position of the -piece and -position parameters does not matter. Entering an invalid parameter will cause an error message which displays the offending parameter. Entering an unimplemented piece (currently Pawn only) will display a message explaining that the piece is not implemented.
All error messages are followed by a Usage description.

I received permission to use the PHPUnit framework for the unit tests. However, after further reflection I decided it would be simpler for others to run the tests if there were no additional frameworks to install. So I created a simple unit testing class loosely based on the functionality of PHPUnit. I believe that I have provided reasonably thorough unit test coverage of the code.

## Installing and Running the program
To install the program:
1. Clone the repository or download and extract it from a zip file,
2. Verify that you have PHP installed.
3. If PHP is installed in some location other than /usr/bin/php, edit the first line of chessercise.php and the first line of unitTests.php to reflect the correct location for php.
4. chmod +x chessercise.php
5. chmod +x unitTests.php

To run the program:
```
./chessercise.php -piece <piece_name> -position <algebraic_starting_position>
```
To run the unit tests:
```
./unitTests.php
```


