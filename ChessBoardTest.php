<?php

class ChessBoardTest extends Test
{
    public function TestIsValidPositionString() {
        $x = -1;
        $y = -1;
        
        // test a valid position string
        $this->assertTrue(ChessBoard::isValidPositionString('b6'));
        // test an out of bounds case in x
        $this->assertFalse(ChessBoard::isValidPositionString('j6'));
        // test an out of bounds case in y
        $this->assertFalse(ChessBoard::isValidPositionString('f9'));
        // test a totally bad position string
        $this->assertFalse(ChessBoard::isValidPositionString('nowhere'));
    }
    
    public function TestPositionStringToCoordinates() {
        $x = -1;
        $y = -1;
        
        // test the corner cases (Literally the corners)
        ChessBoard::positionStringToCoordinates('a1', $x, $y);
        $this->assertEquals($x,0);
        $this->assertEquals($y,0);
        ChessBoard::positionStringToCoordinates('h1', $x, $y);
        $this->assertEquals($x,7);
        $this->assertEquals($y,0);
        ChessBoard::positionStringToCoordinates('a8', $x, $y);
        $this->assertEquals($x,0);
        $this->assertEquals($y,7);
        ChessBoard::positionStringToCoordinates('h8', $x, $y);
        $this->assertEquals($x,7);
        $this->assertEquals($y,7);
        // test a random non-corner case
        ChessBoard::positionStringToCoordinates('d6', $x, $y);
        $this->assertEquals($x,3);
        $this->assertEquals($y,5);
    }
    
    public function TestIsValidPosition() {
        // test somewhere in the middle
        $this->assertTrue(ChessBoard::isValidPosition(3, 5));
        // test the corners
        $this->assertTrue(ChessBoard::isValidPosition(0, 0));
        $this->assertTrue(ChessBoard::isValidPosition(0, 7));
        $this->assertTrue(ChessBoard::isValidPosition(7, 0));
        $this->assertTrue(ChessBoard::isValidPosition(7, 7));
        // test just outside the corners
        $this->assertFalse(ChessBoard::isValidPosition(-1, 0));
        $this->assertFalse(ChessBoard::isValidPosition(0, 8));
        $this->assertFalse(ChessBoard::isValidPosition(7, -1));
        $this->assertFalse(ChessBoard::isValidPosition(8, 7));
    }
}
